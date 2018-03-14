<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Data_peserta extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_peserta'] = $this->db->query("select * from tb_peserta order by id_peserta");
			$this->db->where('kelamin', 'P');
			$this->db->from('tb_peserta');
			$d['jumlah_pria'] = $this->db->count_all_results();
			$this->db->where('kelamin', 'W');
			$this->db->from('tb_peserta');
			$d['jumlah_wanita'] = $this->db->count_all_results();
			
			$this->load->view('data_peserta',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function input_data_peserta()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_kursus'] = $this->db->query("select * from tb_kursus order by id_kursus");
			$this->load->view('input_data_peserta',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function ambil_data_peserta_ajax()
	{
		$data["id_kursus"] = $_GET["id_kursus"];
		$this->db->order_by("id_peserta", "desc");
		$this->db->limit(5);	
		$q = $this->db->get_where("tb_peserta",$data);
		?>
		<table border="1" style="width:100%">
			<thead>
				<tr>
					<td align="center" style="width:20%">ID Peserta</td>
					<td align="center" style="width:65%">Nama Peserta</td>
					<td align="center" style="width:15%">P/W</td>
				</tr>
			</thead>
			<tbody>
		<?php
		foreach($q->result() as $d)
			{
		?>
			<tr>
				<td align="center" style="width:20%"><?php echo $d->id_peserta;?></td>
				<td align="center" style="width:65%"><?php echo $d->nama_peserta;?></td>
				<td align="center" style="width:15%"><?php echo $d->kelamin;?></td>
			</tr>
			
		<?php
			}
		?>
			</tbody>
		</table>
		<?php
	}
	
	public function simpan_data_peserta()
	{
		$this->form_validation->set_rules('id_peserta','ID Peserta','trim|required');
		$this->form_validation->set_rules('nama_peserta','Nama Peserta','trim|required');
		$this->form_validation->set_rules('kelahiran','Kelahiran','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');
		$this->form_validation->set_rules('kota','Kota','trim|required');
		
		$this->form_validation->set_message('required','Data %s harus diisi');
		
		if($this->form_validation->run() == TRUE)
		{
			$cekidpeserta['id_peserta']=$this->input->post("id_peserta");
			$cek = $this->db->get_where('tb_peserta', $cekidpeserta);
			if($cek->num_rows()>0)
			{
				?><script>alert("ID Peserta telah digunakan, silahkan gunakan yang lainnya...");</script><?php
				$this->input_data_peserta();
			}
			else
			{
				$in['id_peserta'] = $this->input->post("id_peserta");
				$in['nama_peserta'] = $this->input->post("nama_peserta");
				$in['kelamin'] = $this->input->post("kelamin");
				$in['kelahiran'] = $this->input->post("kelahiran");
				$in['tgl_lahir'] = $this->input->post("tgl_lahir");
				$in['alamat'] = $this->input->post("alamat");
				$in['kota'] = $this->input->post("kota");
				$in['id_kursus'] = $this->input->post("id_kursus1");
				
				$this->db->insert("tb_peserta",$in);
				$this->index();
			}
		}
		else
		{
			$this->input_data_peserta();
		}
	}
	
	public function hapus_data_peserta()
	{
		$id['id_peserta'] = $this->uri->segment(3);
		$this->db->delete("tb_peserta",$id);
		$this->index();
	}
}