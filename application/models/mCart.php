<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mCart extends CI_Model
{
	public function get_produk($id)
	{
		return $this->db->query("SELECT nama_produk, harga, stok, foto, produk.id_produk, deskripsi, nama_diskon, disc, kategori_produk FROM `produk` LEFT JOIN diskon ON diskon.id_produk=produk.id_produk WHERE produk.id_produk='" . $id . "'")->row();
	}
}

/* End of file mCart.php */
