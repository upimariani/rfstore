<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mHome extends CI_Model
{
	public function produk()
	{
		return $this->db->query("SELECT nama_produk, harga, stok, foto, produk.id_produk, deskripsi, nama_diskon, disc, kategori_produk FROM `produk` LEFT JOIN diskon ON diskon.id_produk=produk.id_produk")->result();
	}
	public function kritik_saran()
	{
		$this->db->select('*');
		$this->db->from('penilaian');
		$this->db->join('transaksi', 'penilaian.id_transaksi = transaksi.id_transaksi', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		return $this->db->get()->result();
	}

	public function penilaian($id_produk)
	{
		return $this->db->query("SELECT review, tgl_transaksi, produk.id_produk, nama_pelanggan, nama_produk FROM `penilaian` JOIN transaksi ON transaksi.id_transaksi=penilaian.id_transaksi JOIN detail_tran ON detail_tran.id_transaksi=transaksi.id_transaksi JOIN produk ON produk.id_produk=detail_tran.id_produk JOIN pelanggan ON pelanggan.id_pelanggan=transaksi.id_pelanggan WHERE produk.id_produk='" . $id_produk . "'")->result();
	}
}

/* End of file mHome.php */
