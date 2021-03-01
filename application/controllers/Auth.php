<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$valid = $this->form_validation;

		$valid->set_rules('username', 'username', 'required');
		$valid->set_rules('password', 'password', 'required');

		if ($valid->run()) {
			$post = $this->input->post();

			$this->db->where('username', $post['username']);
			$user = $this->db->get('tb_user')->row_array();

			if ($user) {
				if (password_verify($post['password'], $user['password'])) {

					$array = array(
						'id_user' => $user['id_user'],
						'nama' => $user['nama'],
						'role' => $user['role']
					);
					
					$this->session->set_userdata( $array );

					$this->session->set_flashdata('success', 'Login Berhasil');
					redirect('dashboard','refresh');
					
				}else{
					$this->session->set_flashdata('error', 'Password anda salah');
					redirect('auth/index','refresh');
				}
			}else{
				$this->session->set_flashdata('error', 'Username tidak ditemukan');
				redirect('auth/index','refresh');
			}

		}

		$this->load->view('auth/index');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth','refresh');
	}
}
