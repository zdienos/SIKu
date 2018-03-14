<?php
$data["id_ruang"] = $_GET["id_ruang"];
$cek = $this->db->get_where('tb_ruang', $data);
foreach($q->result() as $d)
	{
	?>
		<input type="text" id="nama_ruang" name="nama_ruang" class="form-control" value="<?php echo $d->nama_ruang;?>" maxlength="30">
	<?php
	}
?>