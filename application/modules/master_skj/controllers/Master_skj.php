<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_skj extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['master_skj_m']);
        $this->title = "Master SKJ";
    }

    public function index()
    {
        $data['row'] = $this->master_skj_m->get();
        $this->template->load('template', 'v_index', $data);
    }
}
