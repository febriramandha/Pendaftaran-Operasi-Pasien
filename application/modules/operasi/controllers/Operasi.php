<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['Pendaftaran_Operasi_M']);
        $this->title = "Proses Operasi Pasien";
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->template->load('template', 'v_index');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->form_validation->set_rules(
                'tgl_operasi',
                'Tanggal Operasi',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi !',
                ]
            );
            $this->form_validation->set_rules(
                'nama_pasien',
                'Nama Pasien',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'no_mr',
                'No Rekam Medis',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'tgl_lahir',
                'Tanggal Lahir',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'umur',
                'Umur',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'jenis_kelamin',
                'Jenis Kelamin',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'nama_ruangan',
                'Nama Ruangan',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'diagnosa',
                'Diagnosa',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'rencana_tindakan',
                'Rencana Tindakan',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'dpjp_operator',
                'Nama DPJP/ Operator',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'jenis_anastesi',
                'Jenis Anastesi',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'jenis_pembayaran',
                'Jenis Pembayaran',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            if ($this->form_validation->run() == false) {
                $error = validation_errors();
                $this->session->set_flashdata('error', $error);
                $this->index();
            } else {
                $this->Pendaftaran_Operasi_M->save($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan...');
                } else {
                    $error = "Gagal Insert Data!";
                    $this->session->set_flashdata('error', $error);
                }
                redirect('pendaftaran');
            }
        } else if (isset($_POST['edit'])) {
            $this->form_validation->set_rules(
                'tgl_operasi',
                'Tanggal Operasi',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi !',
                ]
            );
            $this->form_validation->set_rules(
                'nama_pasien',
                'Nama Pasien',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'no_mr',
                'No Rekam Medis',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'tgl_lahir',
                'Tanggal Lahir',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'umur',
                'Umur',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'jenis_kelamin',
                'Jenis Kelamin',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'nama_ruangan',
                'Nama Ruangan',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'diagnosa',
                'Diagnosa',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'rencana_tindakan',
                'Rencana Tindakan',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'dpjp_operator',
                'Nama DPJP/ Operator',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'jenis_anastesi',
                'Jenis Anastesi',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            $this->form_validation->set_rules(
                'jenis_pembayaran',
                'Jenis Pembayaran',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi ya !'
                ]
            );
            if ($this->form_validation->run() == false) {
                $error = validation_errors();
                $this->session->set_flashdata('error', $error);
                $this->index();
            } else {
                $this->Pendaftaran_Operasi_M->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('pesan', 'Data Berhasil Diubah...');
                } else {
                    $error = "Gagal Mengubah Data!";
                    $this->session->set_flashdata('error', $error);
                }
                redirect('pendaftaran');
            }
        }
    }

    // public function delete($id)
    // {
    //     $this->Pendaftaran_Operasi_M->del($id);
    //     if ($this->db->affected_rows() > 0) {
    //         $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus...');
    //     } else {
    //         $error = "Gagal Menghapus Data!";
    //         $this->session->set_flashdata('error', $error);
    //     }
    //     redirect('pendaftaran');
    // }

    // public function status($id)
    // {
    //     $this->Pendaftaran_Operasi_M->status($id);
    //     if ($this->db->affected_rows() > 0) {
    //         $this->session->set_flashdata('pesan', 'Status Berhasil Diubah...');
    //     } else {
    //         $error = "Gagal Mengubah Status!";
    //         $this->session->set_flashdata('error', $error);
    //     }
    //     redirect('pendaftaran');
    // }
}
