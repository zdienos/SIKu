<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Laporan_info_tagihan extends CI_Controller
{
	public function index()
	{
		$this->load->library('fpdf');
		$this->load->database();
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));

		$id_peserta = $_POST['id_peserta'];
		//$qnama = mysqli_query("select nama_peserta from tb_peserta where id_peserta='" . $id_peserta . "'");


		//$this->db->where('id_identifikasi',$id);
    //$query = $this->db->get('tb_identifikasi');
    //if($query->num_rows()>0)
    //{
    //  return $query->row();

		//$this->db->select('nama_peserta');
		//$this->db->from('tb_peserta');
		$this->db->where('id_peserta',$id_peserta);
		$query = $this->db->get('tb_peserta');
 		$data['peserta'] = $query->row();

		//$qnamakursus = mysql_query("select tb_peserta.id_peserta, tb_kursus.nama_kursus from tb_peserta
		//					        left join tb_kursus on tb_kursus.id_kursus=tb_peserta.id_kursus
		//					        where tb_peserta.id_peserta='".$id_peserta."'");

		$this->db->select('tb_peserta.id_peserta, tb_kursus.nama_kursus');
		$this->db->from('tb_peserta');
		$this->db->join('tb_kursus', 'tb_kursus.id_kursus=tb_peserta.id_kursus');
		$this->db->where('tb_peserta.id_peserta', $id_peserta);
 		$query = $this->db->get();
		$data['kursus'] = $query->row();

		//$qrincianpembayaran = mysql_query("select * from tb_pembayaran where id_peserta='".$id_peserta."'");
		$this->db->where('id_peserta',$id_peserta);
		$query = $this->db->get('tb_pembayaran');
		$data['pembayaran'] = $query->result();

		//$qtagihan = mysql_query("select tb_peserta.id_peserta, tb_kursus.biaya_kursus from tb_peserta
		//					     left join tb_kursus on tb_kursus.id_kursus=tb_peserta.id_kursus
		//					     where tb_peserta.id_peserta='".$id_peserta."'");
		//while($data4 = mysql_fetch_object($qtagihan))

		$this->db->select('tb_peserta.id_peserta, tb_kursus.biaya_kursus');
		$this->db->from('tb_peserta');
		$this->db->join('tb_kursus', 'tb_kursus.id_kursus=tb_peserta.id_kursus');
		$this->db->where('tb_peserta.id_peserta', $id_peserta);
 		$query = $this->db->get();
		$data['tagihan'] = $query->row();

		$this->load->view('pdf_laporan_info_tagihan',$data);
	}
}
