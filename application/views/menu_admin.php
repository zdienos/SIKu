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
					<h1>Menu Administrator</h1>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Data <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url(); ?>index.php/data_ruang">Ruang</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/data_pengajar">Pengajar</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/data_kursus">Kursus</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/data_peserta">Peserta</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url(); ?>index.php/data_iuran">Pembayaran Iuran</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url(); ?>index.php/laporan_ruang">Ruang</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/laporan_pengajar">Pengajar</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/laporan_jadwal_kursus">Jadwal Kursus</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo base_url(); ?>index.php/form_laporan_info_tagihan_pembayaran">Info Tagihan Pembayaran</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url(); ?>index.php/cek_login_admin/logout">Logout</a></li>
					</ul>
				</div>
			</div>
		</header>
		
		<section id="registration" class="container">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-8" align="center">
						<img src="<?php echo base_url(); ?>/assets/images/logofoss.png" width="75%" />
					</div>
					<div class="col-sm-2">
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
