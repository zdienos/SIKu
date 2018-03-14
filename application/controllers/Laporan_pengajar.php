<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Laporan_pengajar extends CI_Controller
{
	public function index()
	{
		$this->load->library('fpdf');
		$this->load->database();
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
		$data['tb_pengajar'] = $this->db->get('tb_pengajar');
		$this->load->view('pdf_laporan_data_pengajar', $data);
	}
}
