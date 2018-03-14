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
					<h1>Ubah Data Pengajar</h1>
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
						<form class="center" role="form" action="<?php echo base_url(); ?>index.php/data_pengajar/simpan_ubah_data_pengajar2" method="post">	
							<fieldset>
								<div class="form-group">
									<input type="hidden" id="id_pengajar" name="id_pengajar" class="form-control" value="<?php echo $id_pengajar;?>">
									<input type="text" id="id_pengajar1" name="id_pengajar1" class="form-control" value="<?php echo $id_pengajar;?>" disabled>
								</div>
								<div class="form-group">
									<input type="text" id="nama_pengajar" name="nama_pengajar" class="form-control" value="<?php echo $nama_pengajar; ?>">
								</div>
								<?php
									$P = '';
									$W = '';
									if($kelamin=="P")
									{
										$P = 'checked';
										$W = '';
									}
									else if($kelamin=="W")
									{
										$P = '';
										$W = 'checked';
									}
								?>
								<div class="form-group">
									<input type="radio" name="kelamin" value="P" <?php echo $P; ?>> Pria
									<input type="radio" name="kelamin" value="W" <?php echo $W; ?>> Wanita
								</div>
								<div class="form-group">
									<input type="text" id="kelahiran" name="kelahiran" class="form-control" value="<?php echo $kelahiran;?>">
								</div>
								<div class="form-group">
									<input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?php echo $tgl_lahir;?>">
								</div>
								<div class="form-group">
									<input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $alamat;?>">
								</div>
								<div class="form-group">
									<input type="text" id="kota" name="kota" class="form-control" value="<?php echo $kota;?>">
								</div>
								<div class="form-group">
									<input type="text" id="no_hp" name="no_hp" class="form-control" value="<?php echo $no_hp;?>">
								</div>
								<div class="form-group">
									<input type="text" id="pendidikan_akhir" name="pendidikan_akhir" class="form-control" value="<?php echo $pendidikan_akhir;?>">
								</div>
								<div class="form-group">
									<input type="text" id="jurusan" name="jurusan" class="form-control" value="<?php echo $jurusan;?>">
								</div>
								<div class="form-group">
									<input type="text" id="perguruan_tinggi" name="perguruan_tinggi" class="form-control" value="<?php echo $perguruan_tinggi;?>">
								</div>
								<div class="form-group">
									<input type="text" id="thn_lulus" name="thn_lulus" class="form-control" value="<?php echo $thn_lulus;?>">
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-md btn-block">Simpan Perubahan Data Pengajar</button>
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
