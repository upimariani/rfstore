<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKritikSaran extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('penilaian');
		$this->db->join('transaksi', 'penilaian.id_transaksi = transaksi.id_transaksi', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi', 'left');
		$this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk', 'left');
		return $this->db->get()->result();
	}
}

/* End of file mKritikSaran.php */
