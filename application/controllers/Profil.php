<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->title = "Profil Saya";
		$this->load->model(['pegawai_m']);
	}

	public function index()
	{
		$data['profil'] = $this->pegawai_m->getProfil()->row();
		$data['golongan'] = $this->pegawai_m->getGolPeg()->row();
		$this->template->load('template', 'profil/index', $data);
	}
}