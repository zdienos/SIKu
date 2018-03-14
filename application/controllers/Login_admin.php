<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_admin extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('menu_admin');	
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
}
