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
                $params = array(
                    'userid' => $hasil->id,
                    'level' => $hasil->level
                );

                $this->session->set_userdata($params);

                echo alert_login(
                    'success',
                    'Selamat...',
                    'Anda Berhasil Login!',
                    'dashboard'
                );
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

        echo alert_login('success', 'Terima Kasih...', 'Anda Berhasil Keluar Aplikasi!', '/');
    }

    public function blocked()
    {
        $data['title'] = "Error 403";
        $this->load->view('auth/blocked', $data);
    }
}
