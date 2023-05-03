<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skj extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['skj_m']);
        $this->title = "Standar Kompetensi Jabatan";
    }

    public function index()
    {
        $data['row'] = $this->skj_m->get();
        $this->template->load('template', 'v_index', $data);
    }

    public function add()
    {
        $data['row'] = $this->skj_m->get();
        $this->template->load('template', 'v_add', $data);
    }
}
