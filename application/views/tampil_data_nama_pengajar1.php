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
					<h1>Data Pengajar</h1>
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
					<div class="col-sm-1">
					</div>
					<div class="col-sm-10">
						<div align="center">
							<img src="<?php echo base_url(); ?>assets/icons/pengajar.png" width="100px"><br>
							&nbsp;
						</div>
						<table border="1" style="width:100%">
							<thead>
								<tr>
									<td align="center" style="width:5%">ID</td>
									<td align="center" style="width:20%">Nama Pengajar</td>
									<td align="center" style="width:5%">P/W</td>
									<td align="center" style="width:30%">Alamat</td>
									<td align="center" style="width:15%">Kota</td>
									<td align="center" style="width:15%">No. HP</td>
									<td align="center" style="width:10%">Aksi</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach($data_pengajar->result_array() as $dp)
									{
								?>
								<tr>
									<td align="center" style="width:5%"><?php echo $dp['id_pengajar']; ?></td>
									<td align="center" style="width:20%"><?php echo $dp['nama_pengajar']; ?></td>
									<td align="center" style="width:5%"><?php echo $dp['kelamin']; ?></td>
									<td align="center" style="width:30%"><?php echo $dp['alamat']; ?></td>
									<td align="center" style="width:15%"><?php echo $dp['kota']; ?></td>
									<td align="center" style="width:15%"><?php echo $dp['no_hp']; ?></td>
									<td align="center" style="width:10%"><a href="<?php echo base_url();?>index.php/data_pengajar/tampil_form_ubah_data_pengajar_berdasar_nama/<?php echo $dp['id_pengajar'];?>">Ubah</a></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					<div class="col-sm-1">
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
