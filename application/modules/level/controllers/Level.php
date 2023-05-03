<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Level extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['master_kompetensi_m', 'level_m']);
        $this->title = "Level Kamus";
    }

    public function index()
    {
        $mst_kompetensi = $this->master_kompetensi_m->get()->result();

        foreach ($mst_kompetensi as $master) {
            $level_kamus = $this->level_m->getLvKompetensi($master->id)->result();
            $master->level = $level_kamus;
        }

        $data['row'] = $mst_kompetensi;
        $this->template->load('template', 'v_index', $data);
    }
}
