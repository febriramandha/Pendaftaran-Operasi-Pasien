<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->title = "Dashboard";
		// $this->load->model(['pegawai_m', 'jabatan_unor_m', 'kelompok_jabatan_m', 'master_kompetensi_m', 'pengumuman_m']);
	}

	public function index()
	{
		// $data['total_pegawai'] = $this->pegawai_m->totPegawai();
		// $data['total_jabatan_unor'] = $this->jabatan_unor_m->totJabatanUnor();
		// $data['total_kelompok_jabatan'] = $this->kelompok_jabatan_m->totKelJabatan();
		// $data['total_kompetensi'] = $this->master_kompetensi_m->totKompetensi();
		// $data['pengumuman'] = $this->pengumuman_m->get();
		$data['tes'] = 'Tes';
		$this->template->load('template', 'dashboard', $data);
	}
}
