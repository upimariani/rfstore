<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cChatting extends CI_Controller
{

	public function chat($id_pelanggan)
	{
		$data = array(
			'id_pelanggan' => $id_pelanggan,
			'pesan' => $this->db->query("SELECT * FROM `chatting` JOIN pelanggan ON pelanggan.id_pelanggan=chatting.id_pelanggan WHERE pelanggan.id_pelanggan='" . $id_pelanggan . "'")->result()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Chatting/vChatting', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function balas($id_pelanggan)
	{
		$data = array(
			'id_pelanggan' => $id_pelanggan,
			'admin_send' => $this->input->post('pesan')
		);
		$this->db->insert('chatting', $data);
		$this->session->set_flashdata('success', 'Pesan berhasil dibalas!');
		redirect('Admin/cChatting/chat/' . $id_pelanggan);
	}
}

/* End of file cChatting.php */
