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
					<h1>Data Peserta</h1>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Operasi Data <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url(); ?>index.php/data_peserta/input_data_peserta">Input</a></li>
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
					<div class="col-sm-8">
						<div align="center">
							<img src="<?php echo base_url(); ?>assets/icons/pengajar.png" width="100px"><br>
							&nbsp;
						</div>
						
						<table border="1" style="width:100%">
							<thead>
								<tr>
									<td align="center" style="width:10%">No</td>
									<td align="center" style="width:20%">ID Peserta</td>
									<td align="center" style="width:35%">Nama Peserta</td>
									<td align="center" style="width:10%">P/W</td>
									<td align="center" style="width:25%">Aksi</td>
								</tr>
							</thead>
							<tbody>
								<?php $no=0; ?>
								<?php foreach($data_peserta->result_array() as $dp)
									{
								?>
								<tr>
									<?php $no=$no+1; ?>
									<td align="center" style="width:10%"><?php echo $no; ?></td>
									<td align="center" style="width:20%"><?php echo $dp['id_peserta']; ?></td>
									<td align="center" style="width:35%"><?php echo $dp['nama_peserta']; ?></td>
									<td align="center" style="width:10%"><?php echo $dp['kelamin']; ?></td>
									<td align="center" style="width:25%"><a class="btn btn-xs btn-warning" href="<?php echo base_url();?>index.php/data_peserta/hapus_data_peserta/<?php echo $dp['id_peserta'];?>"><i class="icon-trash"></i> Hapus</a></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					<div class="col-sm-4">
						<div align="center">
							<h3>Perbandingan Jumlah Peserta Berdasar Jenis Kelamin</h3>
							<table border="0" style="width:100%">
								<thead>
									<tr>
										<td align="center" style="width:50%"><img src="<?php echo base_url(); ?>assets/icons/maleicon.png" width="60%"></td>
										<td align="center" style="width:50%"><img src="<?php echo base_url(); ?>assets/icons/femaleicon.png" width="60%"></td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td align="center" style="width:50%">
											<h3>Jumlah Pria</h3>
											<h3><?php echo $jumlah_pria; ?></h3>
										</td>
										<td align="center" style="width:50%">
											<h3>Jumlah Wanita</h3>
											<h3><?php echo $jumlah_wanita; ?></h3>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
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
