<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Laporan_jadwal_kursus extends CI_Controller
{
	public function index()
	{
		$this->load->library('fpdf');
		$this->load->database();
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
		$this->db->select('tb_kursus.nama_kursus, tb_kursus.hari, tb_kursus.jam, tb_ruang.nama_ruang, tb_pengajar.nama_pengajar');
		$this->db->from('tb_kursus');
		$this->db->join('tb_ruang', 'tb_kursus.id_ruang=tb_ruang.id_ruang');
		$this->db->join('tb_pengajar', 'tb_kursus.id_pengajar=tb_pengajar.id_pengajar');

		$data['tb_kursus'] = $this->db->get();
		//$data['tb_pengajar'] = $this->db->get('tb_pengajar');
		//$data['tb_kursus'] = $this->db->get('tb_kursus');
		$this->load->view('pdf_laporan_jadwal_kursus', $data);
	}
}
