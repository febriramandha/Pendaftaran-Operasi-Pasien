<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ranmor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('pkb_m');
    }

    public function index()
    {
        $data['row'] = $this->pkb_m->getRanmor();
        $this->template->load('template', 'ranmor/index', $data);
    }

    public function add()
    {
        $ranmor = new stdClass();
        $ranmor->id_entri_ranmor = null;
        $ranmor->nama_pemilik = null;
        $ranmor->alamat = null;
        $ranmor->no_plat = null;
        $ranmor->thn_pembuatan = null;
        $ranmor->tipe_ranmor = null;
        $ranmor->jenis_ranmor = null;
        $ranmor->kepemilikan = null;
        $ranmor->gambar = null;

        $data = [
            'page' => 'add',
            'row' => $ranmor,
        ];
        $this->template->load('template', 'ranmor/ranmor_form', $data);
    }

    public function process()
    {
        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'ranmor-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            if (@$_FILES['file']['name'] != null) {
                if ($this->upload->do_upload('file')) {
                    $post['file'] = $this->upload->data('file_name');

                    $this->pkb_m->addRanmor($post);

                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('pesan', 'Data Kendaraan Berhasil Disimpan...');
                    } else {
                        $error = "Gagal Insert Data!";
                        $this->session->set_flashdata('error', $error);
                    }
                    redirect('ranmor');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('ranmor/add');
                }
            } else {
                $post['file'] = null;

                $this->pkb_m->addRanmor($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('pesan', 'Data Kendaraan Berhasil Disimpan...');
                }
                redirect('ranmor');
            }
        } else if (isset($_POST['edit'])) {
            if ($this->pkb_m->check_kode_prov($post['kode_prov'], $post['id'])->num_rows() > 0) {
                $this->session->set_flashdata('error', "Kode Provinsi <b>$post[kode_prov]</b> sudah digunakan!");
                redirect('provinsi/edit/' . $post['id']);
            } else {
                $this->pkb_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('pesan', 'Data Provinsi Berhasil Diubah...');
                }
                redirect('ranmor');
            }
        }
    }

    public function detail($id)
    {
        $data['row'] = $this->pkb_m->getRanmor($id)->row();
        $this->template->load('template', 'ranmor/detail', $data);
    }
}
