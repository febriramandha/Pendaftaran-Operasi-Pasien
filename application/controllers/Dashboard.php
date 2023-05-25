<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->title = "Dashboard";
		$this->load->model(['User_M', 'Pendaftaran_Operasi_M']);
	}

	public function index()
	{
		$data['lv_user'] = $this->fungsi->user_login()->level;
		$data['total_pegawai'] = $this->User_M->totPegawai();
		$data['total_pasien'] = $this->Pendaftaran_Operasi_M->totPasien();
		$this->template->load('template', 'dashboard', $data);
	}
}
