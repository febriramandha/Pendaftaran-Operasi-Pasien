<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok_jabatan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['kelompok_jabatan_m']);
        $this->title = "Kelompok Jabatan";
    }

    public function index()
    {
        $data['row'] = $this->kelompok_jabatan_m->get();
        $this->template->load('template', 'v_index', $data);
    }
}
