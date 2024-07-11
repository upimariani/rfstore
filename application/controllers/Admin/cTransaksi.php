<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
	}

	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi_admin()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Transaksi/vTransaksi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function detail_transaksi($id)
	{
		$data = array(
			'detail' => $this->mTransaksi->detail_transaksi_pelanggan($id)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Transaksi/vDetailTransaksi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function konfirmasi($id)
	{
		$data = array(
			'stat_transaksi' => '2'
		);
		$this->mTransaksi->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Segera Diproses!');
		redirect('Admin/cTransaksi');
	}
	public function kirim($id)
	{
		$data = array(
			'stat_transaksi' => '3'
		);
		$this->mTransaksi->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Segera Dikirim!');
		redirect('Admin/cTransaksi');
	}
}

/* End of file cTransaksi.php */
