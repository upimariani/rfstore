<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDiskon extends CI_Controller
{

	public function index()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Diskon/vDiskon');
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Diskon/vTambahDiskon');
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cDiskon.php */
