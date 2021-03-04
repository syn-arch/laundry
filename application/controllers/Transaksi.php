<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cek_login();
		$this->load->model('transaksi_m');
		$this->load->model('paket_m');
		$this->load->model('member_m');
		if ($this->session->userdata('role') == 'owner') {
			echo "Error Unauthorized";
			die;
		}
	}

	public function index()
	{
		$data['judul'] = "Data transaksi";
		$data['transaksi'] = $this->transaksi_m->get_transaksi();

		$this->load->view('template/header', $data);
		$this->load->view('transaksi/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function tambah()
	{
		$valid = $this->form_validation;

		$valid->set_rules('kd_invoice', 'kd_invoice', 'required');

		if ($valid->run()) {
			$this->transaksi_m->insert($this->input->post());
			$this->session->set_flashdata('message', 'Berhasil Ditambahkan');
			redirect('transaksi','refresh');
		}

		$data['judul'] = "Tambah Transaksi";
		$data['transaksi'] = $this->transaksi_m->get_transaksi();
		$data['paket'] = $this->paket_m->get_paket();
		$data['member'] = $this->member_m->get_member();

		$this->load->view('template/header', $data);
		$this->load->view('transaksi/tambah', $data);
		$this->load->view('template/footer', $data);
	}

	public function ubah($id)
	{
		$valid = $this->form_validation;

		$valid->set_rules('kd_invoice', 'kd_invoice', 'required');

		if ($valid->run()) {
			$this->transaksi_m->update($this->input->post());
			$this->session->set_flashdata('message', 'Berhasil Diubah');
			redirect('transaksi','refresh');
		}

		$data['judul'] = "Ubah Data";
		$data['transaksi'] = $this->transaksi_m->get_transaksi($id);
		$data['paket'] = $this->paket_m->get_paket();
		$data['member'] = $this->member_m->get_member();

		$this->load->view('template/header', $data);
		$this->load->view('transaksi/ubah', $data);
		$this->load->view('template/footer', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('det_transaksi', ['id_transaksi' => $id]);
		$this->db->delete('tb_transaksi', ['id_transaksi' => $id]);
		$this->session->set_flashdata('message', 'Berhasil Dihapus');
		redirect('transaksi','refresh');
	}
}
