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
					<h1>Data Ruang</h1>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Operasi Data <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url(); ?>index.php/data_ruang/input_data_ruang">Input</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/data_ruang/ubah_data_ruang">Ubah</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/data_ruang/hapus_data_ruang">Hapus</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url(); ?>index.php/cek_login_admin/buka_menu_admin">Ke Menu Admin</a></li>
					</ul>
				</div>
			</div>
		</header>
		
		<section id="main" class="container">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-6">
						<div align="center">
							<img src="<?php echo base_url(); ?>assets/icons/ruang.png" width="100px"><br>
							&nbsp;
						</div>
						<table border="1" style="width:100%">
							<thead>
								<tr>
									<td align="center" style="width:10%">No</td>
									<td align="center" style="width:15%">ID Ruang</td>
									<td align="center" style="width:75%">Nama Ruang</td>
								</tr>
							</thead>
							<tbody>
								<?php $no=0; ?>
								<?php foreach($data_ruang->result_array() as $dr)
									{
								?>
								<tr>
									<?php $no=$no+1; ?>
									<td align="center" style="width:10%"><?php echo $no; ?></td>
									<td align="center" style="width:15%"><?php echo $dr['id_ruang']; ?></td>
									<td align="center" style="width:75%"><?php echo $dr['nama_ruang']; ?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					<div class="col-sm-3">
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
