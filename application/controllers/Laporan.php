<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cek_login();
		$this->load->model('Laporan_m');
		$this->load->model('outlet_m');
		$this->load->model('paket_m');
		if ($this->session->userdata('role') == 'kasir') {
			echo "Error Unauthorized";
			die;
		}
	}

	public function index()
	{
		$dari = $this->input->get('dari');
		$sampai = $this->input->get('sampai');
		$id_paket = $this->input->get('id_paket');
		$id_outlet = $this->input->get('id_outlet');

		$data['judul'] = "Data Laporan";
		$data['laporan'] = $this->Laporan_m->get_laporan($dari, $sampai, $id_paket, $id_outlet);
		$data['outlet'] = $this->outlet_m->get_outlet();
		$data['paket'] = $this->paket_m->get_paket();

		$this->load->view('template/header', $data);
		$this->load->view('Laporan/index', $data);
		$this->load->view('template/footer', $data);
	}
}
