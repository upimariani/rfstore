<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLogin extends CI_Model
{
	public function login($username, $password)
	{
		return $this->db->query("SELECT * FROM `user` WHERE username='" . $username . "' AND password='" . $password . "'")->row();
	}
}

/* End of file mLogin.php */
