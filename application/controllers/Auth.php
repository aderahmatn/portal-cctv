<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->template->load('shared/_layout','auth/login');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */