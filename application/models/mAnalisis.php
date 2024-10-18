<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function variabel()
	{
		return $this->db->query("SELECT COUNT(transaksi.id_transaksi) as frequency, DATEDIFF('" . date('Y-m-d') . "', MAX(tgl_transaksi)) as recency, SUM(total_transaksi) as monetary, transaksi.id_pelanggan, nama_pelanggan FROM `transaksi` JOIN pelanggan ON pelanggan.id_pelanggan=transaksi.id_pelanggan GROUP BY transaksi.id_pelanggan ORDER BY id_transaksi ASC")->result();
	}
	public function triger_limit1()
	{
		return $this->db->query("SELECT COUNT(transaksi.id_transaksi) as frequency, DATEDIFF('" . date('Y-m-d') . "', MAX(tgl_transaksi)) as recency, SUM(total_transaksi) as monetary, transaksi.id_pelanggan, nama_pelanggan FROM `transaksi` JOIN pelanggan ON pelanggan.id_pelanggan=transaksi.id_pelanggan GROUP BY transaksi.id_pelanggan ORDER BY id_transaksi ASC limit 2")->result();
	}
	public function triger_limit2()
	{
		return $this->db->query("SELECT COUNT(transaksi.id_transaksi) as frequency, DATEDIFF('" . date('Y-m-d') . "', MAX(tgl_transaksi)) as recency, SUM(total_transaksi) as monetary, transaksi.id_pelanggan, nama_pelanggan FROM `transaksi` JOIN pelanggan ON pelanggan.id_pelanggan=transaksi.id_pelanggan GROUP BY transaksi.id_pelanggan ORDER BY id_transaksi DESC limit 2")->result();
	}
}

/* End of file mAnalisis.php */
