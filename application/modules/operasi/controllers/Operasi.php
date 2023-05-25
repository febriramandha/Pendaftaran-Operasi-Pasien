<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        $lv_user = $this->fungsi->user_login()->level;
        if ($lv_user == 3) {
            akses_menu($segment);
        }
        $this->load->model(['Pendaftaran_Operasi_M', 'Operasi_M']);
        $this->title = "Proses Operasi Pasien";
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->template->load('template', 'v_index');
    }

    public function form($id)
    {
        $data['row'] = $this->Pendaftaran_Operasi_M->get($id)->row();
        $this->template->load('template', 'v_form', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        $id = $post['id_pasien'];
        if (isset($_POST['add'])) {
            $this->form_validation->set_rules(
                'wkt_tunggu',
                'Lama Waktu Tunggu',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi !',
                ]
            );
            $this->form_validation->set_rules(
                'jam_sign_in',
                'Jam Operasi Sign In',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'jam_time_out',
                'Jam Operasi Time Out',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'jam_sign_out',
                'Jam Operasi Sign Out',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'petugas_ok',
                'Petugas OK',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'rencana_rawat',
                'Rencana Rawat',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'implan',
                'Implan',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'ket',
                'Keterangan',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );

            if ($this->form_validation->run() == false) {
                $error = validation_errors();
                $this->session->set_flashdata('error', $error);
                $this->form($id);
            } else {
                $this->Operasi_M->save($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan...');
                } else {
                    $error = "Gagal Insert Data!";
                    $this->session->set_flashdata('error', $error);
                }
                $data['icon'] = 'success';
                $data['judul_alert'] = 'Selamat...';
                $data['text_alert'] = 'Data Berhasil Disimpan!';
                $data['url'] = 'jadwal';
                $this->load->view('auth/alert', $data);
            }
        }
    }
}
