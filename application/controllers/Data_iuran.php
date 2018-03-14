<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Data_iuran extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$d['data_peserta'] = $this->db->query("select * from tb_peserta order by id_peserta");
			$this->load->view('input_data_iuran',$d);
		}
		else
		{
			$this->load->view('login_admin');
		}
	}
	
	public function ambil_data_peserta_ajax()
	{
		$data["id_peserta"] = $_GET["id_peserta"];
		$q = $this->db->get_where("tb_peserta",$data);
		foreach($q->result() as $d)
			{
		?>
			<div class="form-group">
				<input type="text" id="nama_peserta" name="nama_peserta" class="form-control" value="<?php echo $d->nama_peserta;?>" disabled>
			</div>
			<div class="form-group">
				<input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $d->alamat;?>" disabled >
			</div>
			<div class="form-group">
				<input type="text" id="kota" name="kota" class="form-control" value="<?php echo $d->kota;?>" disabled >
			</div>
			<div class="form-group">
				<input type="text" id="tgl_bayar" name="tgl_bayar" placeholder="yyyy-mm-dd" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" id="jumlah" name="jumlah" placeholder="Jumlah Pembayaran" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn-md btn-block">Simpan Data Pembayaran</button>
			</div>
		<?php
			}
	}
	
	public function ambil_data_iuran_peserta_ajax()
	{
		$data["id_peserta"] = $_GET["id_peserta"];
		$this->db->order_by("tgl_bayar", "desc");	
		$q = $this->db->get_where("tb_pembayaran",$data);
		?>
		<table border="1" style="width:100%">
			<thead>
				<tr>
					<td align="center" style="width:20%">Tanggal Bayar</td>
					<td align="center" style="width:80%">Jumlah (Rp)</td>
				</tr>
			</thead>
			<tbody>
		<?php
		foreach($q->result() as $d)
			{
		?>
			<tr>
				<td align="center" style="width:20%"><?php echo $d->tgl_bayar;?></td>
				<td align="center" style="width:80%"><?php echo number_format($d->jumlah,2,",",".");?></td>
			</tr>
			
		<?php
			}
		?>
			</tbody>
		</table>
		<?php
		
	}
	
	public function ambil_data_jumlah_iuran_peserta_ajax()
	{
		$data["id_peserta"] = $_GET["id_peserta"];
		$this->db->select_sum('jumlah');
		$q = $this->db->get_where("tb_pembayaran",$data);
		foreach($q->result() as $d)
			{
		?>
		<h4>Jumlah Pembayaran : Rp.   <?php echo number_format($d->jumlah,2,",",".");?></h4>
		<?php
			}
	}
	
	public function simpan_data_iuran()
	{
		$id_peserta= $this->input->post("id_peserta");
		$tgl_bayar= $this->input->post("tgl_bayar");
		$in['id_peserta'] = $this->input->post("id_peserta");
		$in['tgl_bayar'] = $this->input->post("tgl_bayar");
		$in['jumlah'] = $this->input->post("jumlah");
		$in['no_bukti'] =$id_peserta."/".$tgl_bayar;
		$this->db->insert("tb_pembayaran",$in);
		$this->index();
	}
}