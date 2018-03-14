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
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Operasi Data <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url(); ?>index.php/data_pengajar/input_data_pengajar">Input</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/data_pengajar/ubah_data_pengajar">Ubah</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/data_pengajar/hapus_data_pengajar">Hapus</a></li>
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
					<div class="col-sm-6">
						<div align="center">
							<img src="<?php echo base_url(); ?>assets/icons/pengajar.png" width="100px"><br>
							&nbsp;
						</div>
						<table border="1" style="width:100%">
							<thead>
								<tr>
									<td align="center" style="width:10%">No</td>
									<td align="center" style="width:20%">ID Pengajar</td>
									<td align="center" style="width:35%">Nama Pengajar</td>
									<td align="center" style="width:10%">P/W</td>
									<td align="center" style="width:25%">No. HP</td>
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
									<td align="center" style="width:35%"><?php echo $dp['nama_pengajar']; ?></td>
									<td align="center" style="width:10%"><?php echo $dp['kelamin']; ?></td>
									<td align="center" style="width:25%"><?php echo $dp['no_hp']; ?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6">
						<div align="center">
							<h4>Perbandingan Jumlah Pengajar Berdasarkan Kelamin</h4><br>
							&nbsp;
							<table border="0" style="width:100%">
								<thead>
									<tr>
										<td align="center" style="width:50%"><img src="<?php echo base_url(); ?>assets/icons/maleicon.png" width="60%"></td>
										<td align="center" style="width:50%"><img src="<?php echo base_url(); ?>assets/icons/femaleicon.png" width="60%"></td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td align="center" style="width:50%"><h3>Pria : <?php echo $jumlah_pria; ?> Orang</h3></td>
										<td align="center" style="width:50%"><h3>Wanita : <?php echo $jumlah_wanita; ?> Orang</h3></td>
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
