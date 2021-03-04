<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member_m extends CI_Model {

	public function get_member($id = '')
	{
		if ($id == '') {
			return $this->db->get('tb_member')->result_array();
		}else{
			return $this->db->get_where('tb_member', ['id_member' => $id])->row_array();
		}
	}	

	public function insert($post)
	{
		$this->db->insert('tb_member', [
			'id_member' => $post['id_member'],
			'nama' => $post['nama'],
			'alamat' => $post['alamat'],
			'jenis_kelamin' => $post['jenis_kelamin'],
			'tlp' => $post['tlp']
		]);
	}

	public function update($post)
	{
		$data =  [
			'nama' => $post['nama'],
			'alamat' => $post['alamat'],
			'jenis_kelamin' => $post['jenis_kelamin'],
			'tlp' => $post['tlp']
		];

		$this->db->where('id_member', $post['id_member']);
		$this->db->update('tb_member', $data);
	}

}

/* End of file member_m.php */
/* Location: ./application/models/member_m.php */ ?>