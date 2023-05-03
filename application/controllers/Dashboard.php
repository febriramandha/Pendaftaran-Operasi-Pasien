<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->title = "Dashboard";
		$this->load->model(['pegawai_m', 'jabatan_unor_m']);
	}

	public function index()
	{
		$data['total_pegawai'] = $this->pegawai_m->totPegawai();
		$data['total_jabatan_unor'] = $this->jabatan_unor_m->totJabatanUnor();
		$this->template->load('template', 'dashboard', $data);
	}
}
