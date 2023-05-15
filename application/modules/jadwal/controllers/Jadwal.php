<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['Pendaftaran_Operasi_M']);
        $this->title = "Jadwal Operasi Pasien";
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = $this->Pendaftaran_Operasi_M->get()->result();
        $this->template->load('template', 'v_index', $data);
    }

    public function detail($id)
    {
        $data['row'] = $this->Pendaftaran_Operasi_M->get($id)->row();
        $this->template->load('template', 'v_detail', $data);
    }

    public function status($id)
    {
        $row = $this->Pendaftaran_Operasi_M->get($id)->row();
        if ($row->status == 1) {
            $st = 2;
        } elseif ($row->status == 2) {
            $st = 3;
        }

        $this->Pendaftaran_Operasi_M->status($id, $st);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Pasien Berhasil Diterima...');
        } else {
            $error = "Gagal Terima Pasien!";
            $this->session->set_flashdata('error', $error);
        }
        redirect('operasi');
    }
}
