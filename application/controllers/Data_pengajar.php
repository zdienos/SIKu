<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Data_pengajar extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_pengajar'] = $this->db->query("select * from tb_pengajar order by id_pengajar");
			$this->db->where('kelamin', 'P');
			$this->db->from('tb_pengajar');
			$d['jumlah_pria'] = $this->db->count_all_results();
			$this->db->where('kelamin', 'W');
			$this->db->from('tb_pengajar');
			$d['jumlah_wanita'] = $this->db->count_all_results();
			
			$this->load->view('data_pengajar',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function input_data_pengajar()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_pengajar'] = $this->db->query("select * from tb_pengajar order by id_pengajar");
			$this->load->view('input_data_pengajar',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function simpan_data_pengajar()
	{
		$this->form_validation->set_rules('id_pengajar','ID Pengajar','trim|required');
		$this->form_validation->set_rules('nama_pengajar','Nama Pengajar','trim|required');
		$this->form_validation->set_rules('kelahiran','Kelahiran','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');
		$this->form_validation->set_rules('kota','Kota','trim|required');
		$this->form_validation->set_rules('no_hp','No. Handphone','trim|required');
		$this->form_validation->set_rules('pendidikan_akhir','pendidikan_akhir','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('pendidikan_akhir','Pendidikan Akhir','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('perguruan_tinggi','Perguruan Tinggi','trim|required');
		$this->form_validation->set_rules('thn_lulus','Tahun Lulus','trim|required');
		
		$this->form_validation->set_message('required','Data %s harus diisi');
		
		if($this->form_validation->run() == TRUE)
		{
			$cekidpengajar['id_pengajar']=$this->input->post("id_pengajar");
			$cek = $this->db->get_where('tb_pengajar', $cekidpengajar);
			if($cek->num_rows()>0)
			{
				?><script>alert("ID Pengajar telah digunakan, silahkan gunakan yang lainnya...");</script><?php
				$this->input_data_pengajar();
			}
			else
			{
				$in['id_pengajar'] = $this->input->post("id_pengajar");
				$in['nama_pengajar'] = $this->input->post("nama_pengajar");
				$in['kelamin'] = $this->input->post("kelamin");
				$in['kelahiran'] = $this->input->post("kelahiran");
				$in['tgl_lahir'] = $this->input->post("tgl_lahir");
				$in['alamat'] = $this->input->post("alamat");
				$in['kota'] = $this->input->post("kota");
				$in['no_hp'] = $this->input->post("no_hp");
				$in['pendidikan_akhir'] = $this->input->post("pendidikan_akhir");
				$in['jurusan'] = $this->input->post("jurusan");
				$in['perguruan_tinggi'] = $this->input->post("perguruan_tinggi");
				$in['thn_lulus'] = $this->input->post("thn_lulus");
				
				$this->db->insert("tb_pengajar",$in);
				$this->index();
			}
		}
		else
		{
			$this->input_data_pengajar();
		}
	}
	
	public function ubah_data_pengajar()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_pengajar']=$this->db->query("select * from tb_pengajar order by id_pengajar");
			$this->load->view('form_cari_data_pengajar',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function cari_data_pengajar_berdasar_id()
	{
		$cekidpengajar['id_pengajar']=$this->input->post("id_pengajar");
		$cek = $this->db->get_where('tb_pengajar', $cekidpengajar);
		if($cek->num_rows()>0)
		{
			$dt = $this->db->get_where("tb_pengajar",$cekidpengajar)->row();
			$d['id_pengajar'] = $dt->id_pengajar;
			$d['nama_pengajar'] = $dt->nama_pengajar;
			$d['kelamin'] = $dt->kelamin;
			$d['kelahiran'] = $dt->kelahiran;
			$d['tgl_lahir'] = $dt->tgl_lahir;
			$d['alamat'] = $dt->alamat;
			$d['kota'] = $dt->kota;
			$d['no_hp'] = $dt->no_hp;
			$d['pendidikan_akhir'] = $dt->pendidikan_akhir;
			$d['jurusan'] = $dt->jurusan;
			$d['perguruan_tinggi'] = $dt->perguruan_tinggi;
			$d['thn_lulus'] = $dt->thn_lulus;
			$this->load->view('form_ubah_data_pengajar1',$d);
		}
		else
		{
			?><script>alert("ID Pengajar tidak ada...");</script><?php
			$this->ubah_data_pengajar();
		}
	}
	
	public function simpan_ubah_data_pengajar1()
	{
		$this->form_validation->set_rules('nama_pengajar','Nama Pengajar','trim|required');
		$this->form_validation->set_rules('kelahiran','Kelahiran','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');
		$this->form_validation->set_rules('kota','Kota','trim|required');
		$this->form_validation->set_rules('no_hp','No. Handphone','trim|required');
		$this->form_validation->set_rules('pendidikan_akhir','pendidikan_akhir','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('pendidikan_akhir','Pendidikan Akhir','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('perguruan_tinggi','Perguruan Tinggi','trim|required');
		$this->form_validation->set_rules('thn_lulus','Tahun Lulus','trim|required');
		
		if($this->form_validation->run() == TRUE)
		{
			$id['id_pengajar'] = $this->input->post("id_pengajar");
			$in['nama_pengajar'] = $this->input->post("nama_pengajar");
			$in['kelamin'] = $this->input->post("kelamin");
			$in['kelahiran'] = $this->input->post("kelahiran");
			$in['tgl_lahir'] = $this->input->post("tgl_lahir");
			$in['alamat'] = $this->input->post("alamat");
			$in['kota'] = $this->input->post("kota");
			$in['no_hp'] = $this->input->post("no_hp");
			$in['pendidikan_akhir'] = $this->input->post("pendidikan_akhir");
			$in['jurusan'] = $this->input->post("jurusan");
			$in['perguruan_tinggi'] = $this->input->post("perguruan_tinggi");
			$in['thn_lulus'] = $this->input->post("thn_lulus");
			
			$this->db->update('tb_pengajar',$in,$id);
			$this->index();
		}
		else
		{
			$this->load->view('form_ubah_data_pengajar1');
		}
	}
	
	public function cari_data_pengajar_berdasar_nama1()
	{
		$this->form_validation->set_rules('nama_pengajar','Nama Pengajar','trim|required');
		if($this->form_validation->run() == TRUE)
		{
			$ceknamapengajar = $this->input->post("nama_pengajar");
			$this->db->like('nama_pengajar', $ceknamapengajar,'both'); 
			$d['data_pengajar'] = $this->db->get('tb_pengajar');
			$this->load->view('tampil_data_nama_pengajar1',$d);
		}
	}
	
	public function tampil_form_ubah_data_pengajar_berdasar_nama()
	{
		$id_get['id_pengajar'] = $this->uri->segment(3);
		$dt = $this->db->get_where("tb_pengajar",$id_get)->row();
		$d['id_pengajar'] = $dt->id_pengajar;
		$d['nama_pengajar'] = $dt->nama_pengajar;
		$d['kelamin'] = $dt->kelamin;
		$d['kelahiran'] = $dt->kelahiran;
		$d['tgl_lahir'] = $dt->tgl_lahir;
		$d['alamat'] = $dt->alamat;
		$d['kota'] = $dt->kota;
		$d['no_hp'] = $dt->no_hp;
		$d['pendidikan_akhir'] = $dt->pendidikan_akhir;
		$d['jurusan'] = $dt->jurusan;
		$d['perguruan_tinggi'] = $dt->perguruan_tinggi;
		$d['thn_lulus'] = $dt->thn_lulus;
		$this->load->view('form_ubah_data_pengajar2',$d);
	}
	
	public function simpan_ubah_data_pengajar2()
	{
		$this->form_validation->set_rules('nama_pengajar','Nama Pengajar','trim|required');
		$this->form_validation->set_rules('kelahiran','Kelahiran','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');
		$this->form_validation->set_rules('kota','Kota','trim|required');
		$this->form_validation->set_rules('no_hp','No. Handphone','trim|required');
		$this->form_validation->set_rules('pendidikan_akhir','pendidikan_akhir','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('pendidikan_akhir','Pendidikan Akhir','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('perguruan_tinggi','Perguruan Tinggi','trim|required');
		$this->form_validation->set_rules('thn_lulus','Tahun Lulus','trim|required');
		
		if($this->form_validation->run() == TRUE)
		{
			$id['id_pengajar'] = $this->input->post("id_pengajar");
			$in['nama_pengajar'] = $this->input->post("nama_pengajar");
			$in['kelamin'] = $this->input->post("kelamin");
			$in['kelahiran'] = $this->input->post("kelahiran");
			$in['tgl_lahir'] = $this->input->post("tgl_lahir");
			$in['alamat'] = $this->input->post("alamat");
			$in['kota'] = $this->input->post("kota");
			$in['no_hp'] = $this->input->post("no_hp");
			$in['pendidikan_akhir'] = $this->input->post("pendidikan_akhir");
			$in['jurusan'] = $this->input->post("jurusan");
			$in['perguruan_tinggi'] = $this->input->post("perguruan_tinggi");
			$in['thn_lulus'] = $this->input->post("thn_lulus");
			
			$this->db->update('tb_pengajar',$in,$id);
			$this->index();
		}
		else
		{
			$this->load->view('form_ubah_data_pengajar2');
		}
	}
	
	public function hapus_data_pengajar()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('form_cari_data_nama_pengajar');
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function cari_data_pengajar_berdasar_nama2()
	{
		$this->form_validation->set_rules('nama_pengajar','Nama Pengajar','trim|required');
		if($this->form_validation->run() == TRUE)
		{
			$ceknamapengajar = $this->input->post("nama_pengajar");
			$this->db->like('nama_pengajar', $ceknamapengajar,'both'); 
			$d['data_pengajar'] = $this->db->get('tb_pengajar');
			$this->load->view('tampil_data_nama_pengajar2',$d);
		}
	}
	
	public function hapus_data_pengajar_berdasar_nama()
	{
		$id['id_pengajar'] = $this->uri->segment(3);
		$this->db->delete("tb_pengajar",$id);
		$this->index();
	}
	
}