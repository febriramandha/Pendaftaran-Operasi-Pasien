<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->title = "Profil Saya";
		$this->load->model(['user_m']);
	}

	public function index()
	{
		$peg_id = $this->fungsi->user_login()->id;
		$data['profil'] = $this->user_m->get($peg_id)->row();
		$this->template->load('template', 'profil/index', $data);
	}
}
