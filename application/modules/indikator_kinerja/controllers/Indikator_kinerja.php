<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indikator_kinerja extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['indikator_kinerja_m', 'master_kinerja_m']);
        $this->title = "Indikator Kinerja";
    }

    public function index()
    {
        $mst_kinerja = $this->master_kinerja_m->get();

        foreach ($mst_kinerja as $master) {
            $indikator_kinerja = $this->indikator_kinerja_m->getIndikator($master->id);
            $master->master_kinerja = $indikator_kinerja;
        }

        $data['row'] = $mst_kinerja;
        $this->template->load('template', 'v_index', $data);
    }
}
