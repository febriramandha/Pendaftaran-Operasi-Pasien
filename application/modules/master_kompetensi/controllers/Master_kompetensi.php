<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_kompetensi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['master_kompetensi_m']);
        $this->title = "Master Kompetensi";
    }

    public function index()
    {
        $data['row'] = $this->master_kompetensi_m->get();
        $this->template->load('template', 'v_index', $data);
    }
}
