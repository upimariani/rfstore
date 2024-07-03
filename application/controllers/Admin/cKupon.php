<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKupon extends CI_Controller
{
	public function index()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Kupon/vKupon');
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Kupon/vTambahKupon');
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cKupon.php */
