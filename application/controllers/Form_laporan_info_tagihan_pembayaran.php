<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Form_laporan_info_tagihan_pembayaran extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_peserta'] = $this->db->query("select * from tb_peserta order by id_peserta");
			$this->load->view('form_laporan_info_tagihan_pembayaran',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
}