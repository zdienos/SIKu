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
					<h1>Input Data Pengajar</h1>
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
					<div class="col-sm-6">
						<?php echo validation_errors(); ?>
						<form class="center" role="form" action="<?php echo base_url(); ?>index.php/data_pengajar/simpan_data_pengajar" method="post">
							<fieldset>
								<div class="form-group">
									<input type="text" id="id_pengajar" name="id_pengajar" placeholder="ID Pengajar" class="form-control" value="<?php echo set_value('id_pengajar');?>" maxlength="3">
								</div>
								<div class="form-group">
									<input type="text" id="nama_pengajar" name="nama_pengajar" placeholder="Nama Pengajar" class="form-control" value="<?php echo set_value('nama_pengajar');?>" maxlength="50">
								</div>
								<div class="form-group">
									<input type="radio" name="kelamin" value="P" checked /> Pria
									<input type="radio" name="kelamin" value="W"/> Wanita
								</div>
								<div class="form-group">
									<input type="text" id="kelahiran" name="kelahiran" placeholder="Kelahiran" class="form-control" value="<?php echo set_value('kelahiran');?>" maxlength="30">
								</div>
								<div class="form-group">
									<input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="yyyy-mm-dd" class="form-control" value="<?php echo set_value('tgl_lahir');?>">
								</div>
								<div class="form-group">
									<input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control" value="<?php echo set_value('alamat');?>" maxlength="200">
								</div>
								<div class="form-group">
									<input type="text" id="kota" name="kota" placeholder="Kota" class="form-control" value="<?php echo set_value('kota');?>" maxlength="30">
								</div>
								<div class="form-group">
									<input type="text" id="no_hp" name="no_hp" placeholder="No. Handphone" class="form-control" value="<?php echo set_value('no_hp');?>" maxlength="20">
								</div>
								<div class="form-group">
									<input type="text" id="pendidikan_akhir" name="pendidikan_akhir" placeholder="Pendidikan Akhir" class="form-control" value="<?php echo set_value('pendidikan_akhir');?>" maxlength="50">
								</div>
								<div class="form-group">
									<input type="text" id="jurusan" name="jurusan" placeholder="Jurusan" class="form-control" value="<?php echo set_value('jurusan');?>" maxlength="50">
								</div>
								<div class="form-group">
									<input type="text" id="perguruan_tinggi" name="perguruan_tinggi" placeholder="Perguruan Tinggi" class="form-control" value="<?php echo set_value('perguruan_tinggi');?>" maxlength="100">
								</div>
								<div class="form-group">
									<input type="text" id="thn_lulus" name="thn_lulus" placeholder="Thn." class="form-control" value="<?php echo set_value('thn_lulus');?>" maxlength="4">
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-md btn-block">Simpan Data Pengajar</button>
								</div>
							</fieldset>
						</form>
					</div>
					
					<div class="col-sm-6">
						<table border="1" style="width:100%">
							<thead>
								<tr>
									<td align="center" style="width:10%">No</td>
									<td align="center" style="width:20%">ID Pengajar</td>
									<td align="center" style="width:55%">Nama Pengajar</td>
									<td align="center" style="width:15%">P/W</td>
								</tr>
							</thead>
							<tbody>
								<?php $no=0; ?>
								<?php foreach($data_pengajar->result_array() as $dp)
									{
								?>
								<tr>
									<?php $no=$no+1; ?>
									<td align="center" style="width:10%"><?php echo $no; ?></td>
									<td align="center" style="width:20%"><?php echo $dp['id_pengajar']; ?></td>
									<td align="center" style="width:55%"><?php echo $dp['nama_pengajar']; ?></td>
									<td align="center" style="width:15%"><?php echo $dp['kelamin']; ?></td>
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
