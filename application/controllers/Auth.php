<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        check_already_login();
        $data['title'] = "Login";
        $this->load->view('auth/login', $data);
    }

    public function proses()
    {
        $this->load->model('User_M');
        $post = $this->input->post(null, TRUE);
        $pass = $this->input->post('password', TRUE);

        $cek  = $this->User_M->loginPg($post);

        if ($cek->num_rows() > 0) {
            // kita ambil isi dari record
            $hasil = $cek->row();
            if (password_verify($pass, $hasil->password)) {
                if ($hasil->status == 1) {
                    $params = array(
                        'userid' => $hasil->id,
                        'level' => $hasil->level
                    );

                    $this->session->set_userdata($params);

                    $data['icon'] = 'success';
                    $data['judul_alert'] = 'Selamat...';
                    $data['text_alert'] = 'Anda Berhasil Login!';
                    $data['url'] = 'dashboard';
                    $this->load->view('auth/alert', $data);
                } else {
                    echo alert_login('error', 'Oops...', 'Maaf Login Gagal, User Tidak Aktif!', '/');
                }
            } else {
                echo alert_login('error', 'Oops...', 'Maaf Login Gagal, password Salah!', '/');
            }
        } else {
            echo alert_login('error', 'Oops...', 'Maaf Login Gagal, username/nip Salah!', '/');
        }
    }

    public function logout()
    {
        $params = ['userid', 'level'];
        $this->session->unset_userdata($params);

        $data['icon'] = 'success';
        $data['judul_alert'] = 'Terima Kasih...';
        $data['text_alert'] = 'Anda Berhasil Keluar Aplikasi!';
        $data['url'] = '/';
        $this->load->view('auth/alert', $data);
    }

    public function blocked()
    {
        $data['title'] = "Error 403";
        $this->load->view('auth/blocked', $data);
    }
}
