<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->template->load('shared/_layout','user/view');
		
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */