<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPesananSaya extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
		// $this->load->model('mAnalisis');
	}
	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi_pelanggan()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vPesananSaya', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function detail_pesanan($id)
	{
		$data = array(
			'kritik_saran' => $this->mTransaksi->kritik_saran($id),
			'transaksi' => $this->mTransaksi->detail_transaksi_pelanggan($id)
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vDetailTransaksi', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function bayar($id)
	{
		$config['upload_path']          = './asset/pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500000;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {

			$data = array(
				'kritik_saran' => $this->mTransaksi->kritik_saran($id),
				'transaksi' => $this->mTransaksi->detail_transaksi_pelanggan($id),
				'error' => $this->upload->display_errors()
			);
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vDetailTransaksi', $data);
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'stat_transaksi' => '1',
				'bukti_payment' => $upload_data['file_name']
			);
			$this->mTransaksi->bayar($id, $data);
			$this->session->set_flashdata('success', 'Anda berhasil melakukan pembayaran!!!');
			redirect('Pelanggan/cPesananSaya/detail_pesanan/' . $id, 'refresh');
		}
	}
	public function pesanan_diterima($id)
	{
		$data = array(
			'stat_transaksi' => '4'
		);
		$this->mTransaksi->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Berhasil Diterima!');
		redirect('Pelanggan/cPesananSaya/detail_pesanan/' . $id, 'refresh');
	}
	public function kritik_saran($id)
	{
		$data = array(
			'review' => $this->input->post('kritik_saran'),
			'rating' => $this->input->post('rating'),
			'id_transaksi' => $id
		);
		$this->db->insert('penilaian', $data);
		$this->session->set_flashdata('success', 'Review dan rating Berhasil Dikirim!');
		redirect('Pelanggan/cPesananSaya/detail_pesanan/' . $id, 'refresh');
	}
	public function batalkan_pesanan($id)
	{
		$this->db->where('id_po', $id);
		$this->db->delete('po');

		$this->db->where('id_po', $id);
		$this->db->delete('detail_po');

		$this->session->set_flashdata('success', 'Pesanan Berhasil Dibatalkan!');
		redirect('Pelanggan/cPesananSaya', 'refresh');
	}
}

/* End of file cPesananSaya.php */
