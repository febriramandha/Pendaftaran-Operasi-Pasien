<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_kinerja extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['master_kinerja_m']);
        $this->title = "Master Modul Kinerja";
    }

    public function index()
    {
        $data['row'] = $this->master_kinerja_m->get();
        $this->template->load('template', 'v_index', $data);
    }
}
