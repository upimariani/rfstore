<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCart extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mCart');
	}


	public function index()
	{
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vCart');
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function add_to_cart($id)
	{
		$produk = $this->mCart->get_produk($id);
		if ($this->session->userdata('level') == '1') {
			$hrg = $produk->harga - ($produk->harga * ($produk->disc / 100));
		} else {
			$hrg = $produk->harga;
		}
		// echo $hrg;
		$data = array(
			'id' => $produk->id_produk,
			'name' => $produk->nama_produk,
			'stok' => $produk->stok,
			'price' => $hrg,
			'qty' => '1',
			'gambar' => $produk->gambar
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'Produk Berhasil Masuk Keranjang!');
		redirect('Pelanggan/cHome');
	}
	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('Pelanggan/cCart');
	}
	public function update_cart()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid'  => $items['rowid'],
				'qty'    => $this->input->post($i . '[qty]')
			);
			$this->cart->update($data);
			$i++;
		}
		redirect('Pelanggan/cCart');
	}
}

/* End of file cCart.php */
