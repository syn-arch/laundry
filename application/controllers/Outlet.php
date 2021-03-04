<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class outlet extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cek_login();
		$this->load->model('outlet_m');
		if ($this->session->userdata('role') == 'kasir') {
			echo "Error Unauthorized";
			die;
		}
		if ($this->session->userdata('role') == 'owner') {
			echo "Error Unauthorized";
			die;
		}
	}

	public function index()
	{
		$data['judul'] = "Data outlet";
		$data['outlet'] = $this->outlet_m->get_outlet();

		$this->load->view('template/header', $data);
		$this->load->view('outlet/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function tambah()
	{
		$valid = $this->form_validation;

		$valid->set_rules('id_outlet', 'id_outlet', 'required');

		if ($valid->run()) {
			$this->outlet_m->insert($this->input->post());
			$this->session->set_flashdata('message', 'Berhasil Ditambahkan');
			redirect('outlet','refresh');
		}

		$data['judul'] = "Tambah Data";
		$data['outlet'] = $this->outlet_m->get_outlet();

		$this->load->view('template/header', $data);
		$this->load->view('outlet/tambah', $data);
		$this->load->view('template/footer', $data);
	}

	public function ubah($id)
	{
		$valid = $this->form_validation;

		$valid->set_rules('id_outlet', 'id_outlet', 'required');

		if ($valid->run()) {
			$this->outlet_m->update($this->input->post());
			$this->session->set_flashdata('message', 'Berhasil Diubah');
			redirect('outlet','refresh');
		}

		$data['judul'] = "Ubah Data";
		$data['outlet'] = $this->outlet_m->get_outlet($id);

		$this->load->view('template/header', $data);
		$this->load->view('outlet/ubah', $data);
		$this->load->view('template/footer', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('tb_outlet', ['id_outlet' => $id]);
		$this->session->set_flashdata('message', 'Berhasil Dihapus');
		redirect('outlet','refresh');
	}
}
