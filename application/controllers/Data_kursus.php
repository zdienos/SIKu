<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Data_kursus extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_kursus'] = $this->db->query("select * from tb_kursus order by id_kursus");
			$this->load->view('data_kursus',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function input_data_kursus()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_pengajar']=$this->db->query("select * from tb_pengajar order by id_pengajar");
			$d['data_ruang']=$this->db->query("select * from tb_ruang order by id_ruang");
			$d['data_kursus']=$this->db->query("select * from tb_kursus order by id_ruang");
			$this->load->view('input_data_kursus',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function simpan_data_kursus()
	{
		$this->form_validation->set_rules('id_kursus','ID Kursus','trim|required');
		$this->form_validation->set_rules('nama_kursus','Nama Kursus','trim|required');
		$this->form_validation->set_rules('biaya_kursus','Biaya Kursus','trim|required|numeric');
		if($this->form_validation->run() == TRUE)
		{
			//cek apakah id_ruang,  hari dan jam telah digunakan
			$d1['id_ruang']=$this->input->post("id_ruang");
			$d1['jam']=$this->input->post("jam");
			$d1['hari']=$this->input->post("hari");
			
			$cek1 = $this->db->get_where('tb_kursus', $d1);
			
			if($cek1->num_rows()>0) //jika ditemukan seri data yang cocok pada tb_kursus
			{
				?><script>alert("Ruangan pada hari dan jam tersebut sedang digunakan, silahkan gunakan yang lainnya...");</script><?php
				$this->input_data_kursus();
			}
			else 
			{
				//cek apakah id_pengajar,  hari dan jam telah digunakan
				$d2['id_pengajar']=$this->input->post("id_pengajar");
				$d2['jam']=$this->input->post("jam");
				$d2['hari']=$this->input->post("hari");
				
				$cek2 = $this->db->get_where('tb_kursus', $d2);
				
				if($cek2->num_rows()>0) //jika ditemukan seri data yang cocok pada tb_kursus
				{
					?><script>alert("Pengajar pada hari dan jam tersebut sedang digunakan, silahkan gunakan yang lainnya...");</script><?php
					$this->input_data_kursus();
				}
				else
				{
					$cekidkursus['id_kursus']=$this->input->post("id_kursus");
					$cek = $this->db->get_where('tb_kursus', $cekidkursus);
					if($cek->num_rows()>0)
					{
						?><script>alert("ID Kursus telah digunakan, silahkan gunakan yang lainnya...");</script><?php
						$this->load->view('input_data_kursus');
					}
					else
					{	
						$in['id_kursus'] = $this->input->post("id_kursus");
						$in['nama_kursus'] = $this->input->post("nama_kursus");
						$in['biaya_kursus'] = $this->input->post("biaya_kursus");
						$in['id_pengajar'] = $this->input->post("id_pengajar");
						$in['id_ruang'] = $this->input->post("id_ruang");
						$in['jam'] = $this->input->post("jam");
						$in['hari'] = $this->input->post("hari");
					
						$this->db->insert("tb_kursus",$in);
						$this->index();
					}
				}	
			}
			
		}
    }

    public function ubah_data_kursus()
    {
        if($this->session->userdata('logged_in'))
		{
			$d['data_kursus']=$this->db->query("select * from tb_kursus order by id_kursus");
			$this->load->view('ubah_data_kursus',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
    }
	
	public function ambil_data_kursus_ajax()
	{
		$data["id_kursus"] = $_GET["id_kursus"];
		$q = $this->db->get_where("tb_kursus",$data);
		foreach($q->result() as $d)
			{
		?>
			<div class="form-group">
				<input type="text" id="nama_kursus" name="nama_kursus" class="form-control" value="Nama Kursus : <?php echo $d->nama_kursus;?>" disabled>
			</div>
			<div class="form-group">
				<input type="text" id="biaya_kursus" name="biaya_kursus" class="form-control" value="Biaya Kursus : Rp. <?php echo number_format($d->biaya_kursus,2,",",".");?>" disabled>
			</div>
			<div class="form-group">
				<input type="text" id="hari" name="hari" class="form-control" value="Hari Kursus : <?php echo $d->hari;?>" disabled>
			</div>
			<div class="form-group">
				<input type="text" id="jam" name="jam" class="form-control" value="Jam Kursus : <?php echo $d->jam;?>" disabled>
			</div>
			<div class="form-group">
				<input type="text" id="id_pengajar" name="id_pengajar" class="form-control" value="ID Pengajar :<?php echo $d->id_pengajar;?>" disabled>
			</div>
			<div class="form-group">
				<input type="text" id="id_ruang" name="id_ruang" class="form-control" value="ID Ruang : <?php echo $d->id_ruang;?>" disabled>
			</div>
			<div class="form-group">
				<button class="btn btn-success btn-md btn-block">Ubah Data Kursus</button>
			</div>
		<?php
			}
	}
	
	public function ambil_data_kursus()
	{
		if($this->session->userdata('logged_in'))
		{
			$cekidkursus['id_kursus']=$this->input->post("id_kursus");
			$cek = $this->db->get_where('tb_kursus', $cekidkursus);
			if($cek->num_rows()>0)
			{
				$dt = $this->db->get_where("tb_kursus",$cekidkursus)->row();
				$d['id_kursus'] = $dt->id_kursus;
				$d['nama_kursus'] = $dt->nama_kursus;
				$d['biaya_kursus'] = $dt->biaya_kursus;
				$d['id_pengajar'] = $dt->id_pengajar;
				$d['id_ruang'] = $dt->id_ruang;
				$d['jam'] = $dt->jam;
				$d['hari'] = $dt->hari;
				$d['data_pengajar']=$this->db->query("select * from tb_pengajar order by id_pengajar");
				$d['data_ruang']=$this->db->query("select * from tb_ruang order by id_ruang");
				$this->load->view('form_ubah_data_kursus',$d);
			}
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function simpan_ubah_data_kursus()
	{
		$this->form_validation->set_rules('nama_kursus','Nama Kursus','trim|required');
		$this->form_validation->set_rules('biaya_kursus','Biaya Kursus','trim|required|numeric');
		
		if($this->form_validation->run() == TRUE)
		{
			//kosongkan dulu data id_pengajar dan id_ruang berdasar id_kursus tersebut supaya 
			//tidak crash pada saat pemeriksaan data pengajar dan ruang pada hari dan jam
			$id['id_kursus']=$this->input->post("id_kursus");
			$in['id_pengajar'] = "";
			$in['id_ruang'] = "";
			$this->db->update('tb_kursus',$in,$id); 
			
			
			//cek apakah id_ruang,  hari dan jam telah digunakan
			$d1['id_ruang']=$this->input->post("id_ruang");
			$d1['jam']=$this->input->post("jam");
			$d1['hari']=$this->input->post("hari");
			
			$cek1 = $this->db->get_where('tb_kursus', $d1);
			
			if($cek1->num_rows()>0) //jika ditemukan seri data yang cocok pada tb_kursus
			{
				?><script>alert("Ruangan pada hari dan jam tersebut sedang digunakan, silahkan gunakan yang lainnya...");</script><?php
				$this->ambil_data_kursus();
			}
			else 
			{
				//cek apakah id_pengajar,  hari dan jam telah digunakan
				$d2['id_pengajar']=$this->input->post("id_pengajar");
				$d2['jam']=$this->input->post("jam");
				$d2['hari']=$this->input->post("hari");
				
				$cek2 = $this->db->get_where('tb_kursus', $d2);
				
				if($cek2->num_rows()>0) //jika ditemukan seri data yang cocok pada tb_kursus
				{
					?><script>alert("Pengajar pada hari dan jam tersebut sedang digunakan, silahkan gunakan yang lainnya...");</script><?php
					$this->ambil_data_kursus();
				}
				else
				{
					$id['id_kursus'] = $this->input->post("id_kursus");
					$in['nama_kursus'] = $this->input->post("nama_kursus");
					$in['biaya_kursus'] = $this->input->post("biaya_kursus");
					$in['id_pengajar'] = $this->input->post("id_pengajar");
					$in['id_ruang'] = $this->input->post("id_ruang");
					$in['jam'] = $this->input->post("jam");
					$in['hari'] = $this->input->post("hari");
					
					$this->db->update('tb_kursus',$in,$id);
					$this->index();
				}
			}
			
		}
	}
	
	public function hapus_data_kursus()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_kursus']=$this->db->query("select * from tb_kursus order by id_kursus");
			$this->load->view('form_cari_data_id_kursus',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function hapus_data_kursus_ok()
	{
		$d['id_kursus'] = $this->input->post("id_kursus");
		$this->db->delete("tb_kursus",$d);
		$this->index();
	}
	

}