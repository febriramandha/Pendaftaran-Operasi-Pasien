<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Kamus extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['master_kompetensi_m', 'level_m', 'indikator_level_m']);
        $this->title = "Data Kamus";
    }

    public function index()
    {
        $mst_kompetensi = $this->master_kompetensi_m->get()->result();

        foreach ($mst_kompetensi as $master) {
            $level_kamus = $this->level_m->getLvKompetensi($master->id)->result();
            $master->level = $level_kamus;

            foreach ($level_kamus as $sub_level) {
                $indikator_level = $this->indikator_level_m->getByLevel($sub_level->id)->result();
                $sub_level->indikator_level = $indikator_level;
            }
        }

        $data['row'] = $mst_kompetensi;
        $this->template->load('template', 'v_index', $data);
    }

    public function view($id)
    {
        $mst_kompetensi = $this->master_kompetensi_m->get($id)->row();

        $level_kamus = $this->level_m->getLvKompetensi($mst_kompetensi->komp_id)->result();

        foreach ($level_kamus as $sub_level) {
            $indikator_level = $this->indikator_level_m->getByLevel($sub_level->id)->result();
            $sub_level->indikator_level = $indikator_level;
        }

        $data['row'] = $mst_kompetensi;
        $data['lv_kamus'] = $level_kamus;
        $this->template->load('template', 'v_detail', $data);
    }
}
