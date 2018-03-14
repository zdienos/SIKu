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
					<h1>Ubah Data Kursus</h1>
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
						<form class="center" role="form" action="<?php echo base_url(); ?>index.php/data_kursus/hapus_data_kursus_ok" method="post">
							<fieldset>
								<div class="form-group">
									<select name="id_kursus" id="id_kursus" class="form-control" >
									<option value="">Pilih ID Kursus</option>
										<?php foreach($data_kursus->result_array() as $dk)
											{
										?>
										<option value="<?php echo $dk['id_kursus']; ?>"><?php echo $dk['id_kursus']; ?> - <?php echo $dk['nama_kursus']; ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-md btn-block">Hapus Data Kursus</button>
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
