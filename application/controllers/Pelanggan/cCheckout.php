<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

	public function index()
	{
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vCheckout');
	}
	public function order()
	{



		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'tgl_transaksi' => date('Y-m-d'),
			'total_transaksi' => $this->cart->total(),
			'total_pembayaran' => $this->input->post('total_bayar'),
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
