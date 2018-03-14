<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cek_login_admin extends CI_Controller
{
	public function index()
	{
		$id_admin = $this->input->post('id_admin');
		$password = md5($this->input->post('password', true));

		$this->db->where('id_admin', $id_admin);
		$this->db->where('password', $password);

		$query = $this->db->get('tb_admin');

		

		if($query->num_rows() == 1)
		{
			echo "tess";
			$row = $query->row();

			$data = array(
				'id_admin'=>$row->id_admin,
				'password'=>$row->password
			);
			$this->session->set_userdata('logged_in',$data);
			$this->buka_menu_admin();
		}
		else
		{
 			echo "password salah";
			$this->load->view('login_admin');
		}
	}

	public function buka_menu_admin()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$this->load->view('menu_admin');
		}
	}

	public function logout()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->session->unset_userdata('logged_in');
			redirect('login_admin','refresh');
		}
	}
}
