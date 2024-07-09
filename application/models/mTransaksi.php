<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksi extends CI_Model
{
	public function transaksi_pelanggan()
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON pelanggan.id_pelanggan = transaksi.id_pelanggan WHERE pelanggan.id_pelanggan='" . $this->session->userdata('id_pelanggan') . "';")->result();
		return $data;
	}
	public function detail_transaksi_pelanggan($id_transaksi)
	{
		$data['detail_transaksi'] = $this->db->query("SELECT * FROM `transaksi` JOIN detail_tran ON transaksi.id_transaksi=detail_tran.id_transaksi JOIN produk ON produk.id_produk=detail_tran.id_produk WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->result();
		$data['transaksi'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE id_transaksi='" . $id_transaksi . "'")->row();
		return $data;
	}
	public function bayar($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
	}
	public function pesanan_diterima($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
	}
	public function kritik_saran($id)
	{
		return $this->db->query("SELECT transaksi.id_transaksi, review, stat_transaksi FROM `transaksi` LEFT JOIN penilaian ON transaksi.id_transaksi=penilaian.id_transaksi WHERE transaksi.id_transaksi='" . $id . "'")->row();
	}

	//admin
	public function transaksi_admin()
	{
		return $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan")->result();
	}
	public function update_status($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
	}
}

/* End of file mtransaksi.php */
