<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cek_login();
	}

	public function index()
	{
		$data['judul'] = "Dashboard";

		$this->load->view('template/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer', $data);
	}
}
