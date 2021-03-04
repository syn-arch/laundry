<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_m extends CI_Model {

	public function get_transaksi($id = '')
	{
		if ($id == '') {
			$this->db->select('*, tb_member.nama as nama_member, tb_outlet.nama as nama_outlet, tb_user.nama as nama_user');
			$this->db->join('tb_outlet', 'id_outlet', 'left');
			$this->db->join('tb_user', 'id_user', 'left');
			$this->db->join('tb_member', 'id_member', 'left');
			return $this->db->get('tb_transaksi')->result_array();
		}else{
			return $this->db->get_where('tb_transaksi', ['id_transaksi' => $id])->row_array();
		}
	}	

	public function insert($post)
	{
		$id_outlet = $this->session->userdata('id_outlet');
		$id_transaksi = id('tb_transaksi', 'id_transaksi');

		$this->db->insert('tb_transaksi', [
			'id_transaksi' => $id_transaksi,
			'id_outlet' => $id_outlet,
			'kd_invoice' => $post['kd_invoice'],
			'id_member' => $post['member'],
			'id_user' => $this->session->userdata('id_user'),
			'tgl' => $post['tgl'],
			'batas_waktu' => $post['batas_waktu'],
			'tgl_bayar' => $post['tgl_bayar'],
			'biaya_tambahan' => $post['biaya_tambahan'],
			'pajak' => $post['pajak'],
			'diskon' => $post['diskon'],
			'status' => $post['status'],
			'dibayar' => $post['dibayar'],
			'total_bayar' => $post['total_bayar'],
			'cash' => $post['cash']
		]);

		for ($i=0; $i < count($post['id_paket']); $i++) { 
			$this->db->insert('det_transaksi', [
				'id_dettransaksi' => id('det_transaksi', 'id_dettransaksi'),
				'id_transaksi' => $id_transaksi,
				'id_paket' => $post['id_paket'][$i],
				'qty' => $post['qty'][$i],
				'keterangan' => $post['keterangan'][$i],
				'total_harga' => $post['total_harga'][$i]
			]);
		}
	}

	public function update($post)
	{
		$id_outlet = $this->session->userdata('id_outlet');

		$this->db->where('kd_invoice', $post['kd_invoice']);
		$this->db->update('tb_transaksi', [
			'id_outlet' => $id_outlet,
			'id_member' => $post['member'],
			'id_user' => $this->session->userdata('id_user'),
			'tgl' => $post['tgl'],
			'batas_waktu' => $post['batas_waktu'],
			'tgl_bayar' => $post['tgl_bayar'],
			'status' => $post['status'],
			'dibayar' => $post['dibayar']		
		]);
	}

}

/* End of file transaksi_m.php */
/* Location: ./application/models/transaksi_m.php */ ?>