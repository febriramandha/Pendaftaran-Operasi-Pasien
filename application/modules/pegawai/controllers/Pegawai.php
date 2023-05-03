<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $segment = $this->uri->segment(1);
        akses_menu($segment);
        $this->load->model(['pegawai_m', 'unor_m']);
        $this->title = "Pegawai";
    }

    public function index()
    {
        $unor = $this->unor_m->get()->result();
        $data = [
            'unor' => $unor,
        ];
        $data['row'] = $this->pegawai_m->get();
        $this->template->load('template', 'v_index', $data);
    }

    public function load_peg()
    {
        $unor = $_GET['unor'];

        if ($unor == 0) {
            $data['row'] = $this->pegawai_m->get();
        } else {
            $data['row'] = $this->pegawai_m->getByOpd($unor);
        }

        $this->load->view('pegawai/filter_opd', $data);
    }

    function get_ajax()
    {
        $list = $this->pegawai_m->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $peg) {
            $no++;
            $row = array();
            $row[] = $no . ".";
            $row[] = users_icon_datatables(gelar_nama($peg->gelar_depan, $peg->nama_pegawai, $peg->gelar_blkng), $peg->nip);
            $row[] = instansi_icon_datatables($peg->nama_unor, $peg->nama_jabatan);
            $row[] = str_status($peg->stat_peg);
            $data[] = $row;
        }
        $output = array(
            "draw" => @$_POST['draw'],
            "recordsTotal" => $this->pegawai_m->count_all(),
            "recordsFiltered" => $this->pegawai_m->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
}
