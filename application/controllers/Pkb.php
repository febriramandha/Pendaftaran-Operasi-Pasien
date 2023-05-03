<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pkb extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('pkb_m');
    }

    public function index()
    {
        $data['row'] = $this->pkb_m->getPkb();
        $this->template->load('template', 'pkb/index', $data);
    }

    public function add()
    {
        $pkb = new stdClass();
        $pkb->id_entri_pkb = null;
        $pkb->nama_pemilik = null;
        $pkb->no_plat = null;
        $pkb->jenis_ranmor = null;
        $pkb->kepemilikan = null;
        $pkb->rute = null;
        $pkb->tgl_pkb_sebelumnya = null;
        $pkb->tgl_pkb_selanjutnya = null;
        $pkb->user_id = null;
        $pkb->retribusi = null;
        $pkb->denda = null;
        $pkb->tot_bayar = null;

        $query_ranmor = $this->pkb_m->getRanmor();
        $ranmor[null] = '';
        foreach ($query_ranmor->result() as $unt) {
            $ranmor[$unt->id_ranmor] = strtoupper($unt->nama_pemilik);
        }

        $data = [
            'page' => 'add',
            'ranmor' => $ranmor, 'selectedranmor' => null,
            'row' => $pkb,
        ];
        $this->template->load('template', 'pkb/pkb_form', $data);
    }

    public function getNoPlat()
    {
        if ($this->input->post('id_ranmor')) {
            echo $this->pkb_m->getPlat($this->input->post('id_ranmor'));
        }
    }

    public function getJenis()
    {
        if ($this->input->post('id_ranmor')) {
            echo $this->pkb_m->getJenis($this->input->post('id_ranmor'));
        }
    }

    public function getKepemilikan()
    {
        if ($this->input->post('id_ranmor')) {
            echo $this->pkb_m->getKepemilikan($this->input->post('id_ranmor'));
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->pkb_m->addPkb($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan...');
            } else {
                $error = "Gagal Insert Data!";
                $this->session->set_flashdata('error', $error);
            }
            redirect('pkb');
        } else if (isset($_POST['edit'])) {
            $this->pkb_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('pesan', 'Data Provinsi Berhasil Diubah...');
            }
            redirect('pkb');
        }
    }
}
