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
					<h1>Info Tagihan Pembayaran Iuran</h1>
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
					
					<div class="col-sm-3">
					</div>
					
					<div class="col-sm-6">
						<?php echo validation_errors(); ?>
						<form class="center" role="form" action="<?php echo base_url(); ?>index.php/laporan_info_tagihan" method="post">
							<fieldset>
								<div class="form-group">
									<select name="id_peserta" id="id_peserta" class="form-control" >
										<option value="">Silahkan Pilih ID Peserta</option>
										<?php foreach($data_peserta->result_array() as $dp)
											{
										?>
										<option value="<?php echo $dp['id_peserta']; ?>"><?php echo $dp['id_peserta']; ?> - <?php echo $dp['nama_peserta']; ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-md btn-block">Cetak Info Tagihan</button>
								</div>
							</fieldset>
						</form>
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
