<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKupon');
	}

	public function index()
	{
		$data = array(
			'kupon' => $this->mKupon->select()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vCheckout', $data);
	}
	public function order()
	{
		$kupon = $this->input->post('kupon');
		if ($kupon != '') {
			$id_kupon = $kupon;
			$potongan = $this->db->query("SELECT * FROM `kupon` WHERE id_kupon='" . $kupon . "'")->row();
			$bayar = $this->input->post('total_bayar') - $potongan->potongan_harga;
		} else {
			$id_kupon = '0';
			$bayar = $this->input->post('total_bayar');
		}
		// echo $kupon;
		// echo $bayar;
		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'id_kupon' => $id_kupon,
			'tgl_transaksi' => date('Y-m-d'),
			'total_transaksi' => $this->cart->total(),
			'total_pembayaran' => $bayar,
			'ongkir' => $this->input->post('ongkir'),
			'stat_transaksi' => '0',
			'bukti_payment' => '0',
			'metode_pembayaran' => '0',
			'metode_pengiriman' => '0',
			'alamat_pengiriman' => $this->input->post('alamat') . ' ' . $this->input->post('kota') . ' ' . $this->input->post('provinsi') . ' ' . $this->input->post('estimasi') . ' ' . $this->input->post('expedisi'),
		);
		$this->db->insert('transaksi', $data);




		//update stok produk
		foreach ($this->cart->contents() as $key => $item) {
			$update_stok = $item['stok'] - $item['qty'];
			$stok = array(
				'stok' => $update_stok
			);
			$this->db->where('id_produk', $item['id']);
			$this->db->update('produk', $stok);
		}

		$id_transaksi = $this->db->query("SELECT MAX(id_transaksi) as id FROM `transaksi`")->row();
		foreach ($this->cart->contents() as $key => $value) {
			$detail = array(
				'id_transaksi' => $id_transaksi->id,
				'id_produk' => $value['id'],
				'qty' => $value['qty']
			);
			$this->db->insert('detail_tran', $detail);
		}
		$this->cart->destroy();
		redirect('Pelanggan/cPesananSaya');
	}
}

/* End of file cCheckout.php */
