<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDiskon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDiskon');
		$this->load->model('mProduk');
	}

	public function index()
	{
		$data = array(
			'diskon' => $this->mDiskon->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Diskon/vDiskon', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('nama', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('diskon', 'Besar Diskon', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'produk' => $this->mProduk->select()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/header');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Diskon/vTambahDiskon', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'id_produk' => $this->input->post('produk'),
				'nama_diskon' => $this->input->post('nama'),
				'disc' => $this->input->post('diskon')
			);
			$this->mDiskon->insert($data);
			$this->session->set_flashdata('success', 'Data Diskon Produk berhasil ditambahkan!');
			redirect('Admin/cDiskon');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('nama', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('diskon', 'Besar Diskon', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'produk' => $this->mProduk->select(),
				'diskon' => $this->mDiskon->edit($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/header');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Diskon/vEditDiskon', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'id_produk' => $this->input->post('produk'),
				'nama_diskon' => $this->input->post('nama'),
				'disc' => $this->input->post('diskon')
			);
			$this->mDiskon->update($id, $data);
			$this->session->set_flashdata('success', 'Data Diskon Produk berhasil diperbaharui!');
			redirect('Admin/cDiskon');
		}
	}
	public function delete($id)
	{
		$this->mDiskon->delete($id);
		$this->session->set_flashdata('success', 'Data Diskon Produk berhasil dihapus!');
		redirect('Admin/cDiskon');
	}
}

/* End of file cDiskon.php */
