<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        // $this->load->model(['pendaftaran_operasi_m']);
        $this->title = "Pendaftaran Operasi Pasien";
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = "Test";
        // $data['row'] = $this->pendaftaran_operasi_m->get();
        $this->template->load('template', 'v_index', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->form_validation->set_rules(
                'kode_kelompok',
                'Kode Kelompok',
                'required|is_unique[kelompok_jabatan.kode_kelompok]',
                [
                    'required' => '<b>%s</b> Wajib di isi !',
                    'is_unique' => '<b>%s</b> Sudah Terdaftar!'
                ]
            );
            $this->form_validation->set_rules(
                'nama_kelompok',
                'Nama Kelompok',
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
                $this->pendaftaran_operasi_m->save($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan...');
                } else {
                    $error = "Gagal Insert Data!";
                    $this->session->set_flashdata('error', $error);
                }
                redirect('kelompok_jabatan');
            }
        } else if (isset($_POST['edit'])) {
            $this->form_validation->set_rules(
                'kode_kelompok',
                'Kode Kelompok',
                'required',
                [
                    'required' => '<b>%s</b> Wajib di isi !',
                ]
            );
            $this->form_validation->set_rules(
                'nama_kelompok',
                'Nama Kelompok',
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
                $this->pendaftaran_operasi_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('pesan', 'Data Berhasil Diubah...');
                } else {
                    $error = "Gagal Mengubah Data!";
                    $this->session->set_flashdata('error', $error);
                }
                redirect('kelompok_jabatan');
            }
        }
    }

    public function delete($id)
    {
        $this->pendaftaran_operasi_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus...');
        } else {
            $error = "Gagal Menghapus Data!";
            $this->session->set_flashdata('error', $error);
        }
        redirect('kelompok_jabatan');
    }

    public function status($id)
    {
        $this->pendaftaran_operasi_m->status($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Status Berhasil Diubah...');
        } else {
            $error = "Gagal Mengubah Status!";
            $this->session->set_flashdata('error', $error);
        }
        redirect('kelompok_jabatan');
    }
}
