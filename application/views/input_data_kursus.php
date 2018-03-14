<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SIM Kursus FOSS</title>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/icons/logofoss.png">
	</head>
	<body>
	
		<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner"><!--bagian header-->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1>Input Data Kursus</h1>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url(); ?>index.php/cek_login_admin/buka_menu_admin">Ke Menu Admin</a></li>
					</ul>
				</div>
			</div>
		</header>
		
		<section id="main" class="container">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<?php echo validation_errors(); ?>
						<form class="center" role="form" action="<?php echo base_url(); ?>index.php/data_kursus/simpan_data_kursus" method="post">
							<fieldset>
								<div class="form-group">
									<input type="text" id="id_kursus" name="id_kursus" placeholder="ID Kursus" class="form-control" value="<?php echo set_value('id_kursus');?>" maxlength="3">
								</div>
								<div class="form-group">
									<input type="text" id="nama_kursus" name="nama_kursus" placeholder="Nama kursus" class="form-control" value="<?php echo set_value('nama_kursus');?>" maxlength="100">
								</div>
								<div class="form-group">
									<input type="text" id="biaya_kursus" name="biaya_kursus" placeholder="Biaya kursus" class="form-control" value="<?php echo set_value('biaya_kursus');?>">
								</div>
								<div class="form-group">
									<select name="id_pengajar" id="id_pengajar" class="form-control" >
										<?php foreach($data_pengajar->result_array() as $dp)
											{
										?>
										<option value="<?php echo $dp['id_pengajar']; ?>"><?php echo $dp['id_pengajar']; ?> - <?php echo $dp['nama_pengajar']; ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<select name="id_ruang" id="id_ruang" class="form-control" >
										<?php foreach($data_ruang->result_array() as $dr)
											{
										?>
										<option value="<?php echo $dr['id_ruang']; ?>"><?php echo $dr['id_ruang']; ?> - <?php echo $dr['nama_ruang']; ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<input type="text" id="jam" name="jam" placeholder="00:00:00" class="form-control" value="<?php echo set_value('jam');?>">
								</div>
								<div class="form-group">
									<select name="hari" id="hari" class="form-control" >
										<option value="Senin">Senin</option>
										<option value="Selasa">Selasa</option>
										<option value="Rabu">Rabu</option>
										<option value="Kamis">Kamis</option>
										<option value="Jumat">Jumat</option>
										<option value="Sabtu">Sabtu</option>
										<option value="Minggu">Minggu</option>
									</select>
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-md btn-block">Simpan Data Kursus</button>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="col-sm-8">
						<div align="center">
							Data Kursus<br>
							&nbsp;
						</div>
						<table border="1" style="width:100%">
							<thead>
								<tr>
									<td align="center" style="width:10%">ID Kursus</td>
									<td align="center" style="width:20%">Nama Kursus</td>
									<td align="center" style="width:20%">Biaya</td>
									<td align="center" style="width:10%">Hari</td>
									<td align="center" style="width:10%">Jam</td>
									<td align="center" style="width:15%">ID Pengajar</td>
									<td align="center" style="width:15%">ID Ruang</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach($data_kursus->result_array() as $dk)
									{
								?>
								<tr>
									<td align="center" style="width:10%"><?php echo $dk['id_kursus']; ?></td>
									<td align="center" style="width:20%"><?php echo $dk['nama_kursus']; ?></td>
									<td align="center" style="width:20%">Rp. <?php echo number_format($dk['biaya_kursus'],2,",","."); ?></td>
									<td align="center" style="width:10%"><?php echo $dk['hari']; ?></td>
									<td align="center" style="width:10%"><?php echo $dk['jam']; ?></td>
									<td align="center" style="width:15%"><?php echo $dk['id_pengajar']; ?></td>
									<td align="center" style="width:15%"><?php echo $dk['id_ruang']; ?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		
		<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014. Lembaga Kursus FOSS
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
		</footer>
		
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	</body>
</html>
