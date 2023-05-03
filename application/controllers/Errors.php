<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Errors extends CI_Controller
{

	public function index()
	{
		$data['title'] = "Error 404";
		$this->load->view('auth/error_404', $data);
	}

	public function blocked()
	{
		$data['title'] = "Error 403";
		$this->load->view('auth/blocked', $data);
	}
}
