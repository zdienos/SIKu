<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Data_ruang extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_ruang'] = $this->db->query("select * from tb_ruang order by id_ruang");
			$this->load->view('data_ruang',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function input_data_ruang()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('input_data_ruang');
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function simpan_data_ruang()
	{
		$this->form_validation->set_rules('id_ruang','ID Ruang','trim|required');
		$this->form_validation->set_rules('nama_ruang','Nama Ruang','trim|required');
		if($this->form_validation->run() == TRUE)
		{
			$cekidruang['id_ruang']=$this->input->post("id_ruang");
			$cek = $this->db->get_where('tb_ruang', $cekidruang);
			if($cek->num_rows()>0)
			{
				?><script>alert("ID Ruang telah digunakan, silahkan gunakan yang lainnya...");</script><?php
				$this->load->view('input_data_ruang');
			}
			else
			{
				$in['id_ruang'] = $this->input->post("id_ruang");
				$in['nama_ruang'] = $this->input->post("nama_ruang");
				$this->db->insert("tb_ruang",$in);
				$this->index();
			}
		}
		else
		{
			$this->load->view('input_data_ruang');
		}
	}
	
	public function ubah_data_ruang()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_ruang']=$this->db->query("select * from tb_ruang order by id_ruang");
			$this->load->view('ubah_data_ruang',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function cari_ubah_data_ruang()
	{
		$cekidruang['id_ruang']=$this->input->post("id_ruang");
		$cek = $this->db->get_where('tb_ruang', $cekidruang);
		if($cek->num_rows()>0)
		{
			$dt = $this->db->get_where("tb_ruang",$cekidruang)->row();
			$d['id_ruang'] = $dt->id_ruang;
			$d['nama_ruang'] = $dt->nama_ruang;
			$this->load->view('form_ubah_data_ruang',$d);
		}
		else
		{
			?><script>alert("ID Ruang tidak ada...");</script><?php
			$this->ubah_data_ruang();
		}
	}
	
	public function simpan_ubah_data_ruang()
	{
		$this->form_validation->set_rules('nama_ruang','Nama Ruang','trim|required');
		if($this->form_validation->run() == TRUE)
		{
			$id['id_ruang'] = $this->input->post("id_ruang");
			$in['nama_ruang'] = $this->input->post("nama_ruang");
			$this->db->update('tb_ruang',$in,$id);
			$this->index();
		}
		else
		{
			$this->load->view('form_ubah_data_ruang');
		}
	}
	
	public function hapus_data_ruang()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_ruang']=$this->db->query("select * from tb_ruang order by id_ruang");
			$this->load->view('hapus_data_ruang',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function cari_hapus_data_ruang()
	{
		$cekidruang['id_ruang']=$this->input->post("id_ruang");
		$cek = $this->db->get_where('tb_ruang', $cekidruang);
		if($cek->num_rows()>0)
		{
			$dt = $this->db->get_where("tb_ruang",$cekidruang)->row();
			$d['id_ruang'] = $dt->id_ruang;
			$d['nama_ruang'] = $dt->nama_ruang;
			$this->load->view('form_hapus_data_ruang',$d);
		}
		else
		{
			?><script>alert("ID Ruang tidak ada...");</script><?php
			$this->hapus_data_ruang();
		}
	}
	
	public function hapus_data_ruang_ok()
	{
		$d['id_ruang'] = $this->input->post("id_ruang");
		$this->db->delete("tb_ruang",$d);
		$this->index();
	}
	
	
}