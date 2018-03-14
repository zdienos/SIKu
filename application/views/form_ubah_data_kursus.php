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
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.js"></script>
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
						<form class="center" role="form" action="<?php echo base_url(); ?>index.php/data_kursus/simpan_ubah_data_kursus" method="post">
							<fieldset>
								<div class="form-group">
									<input type="hidden" id="id_kursus" name="id_kursus" class="form-control" value="<?php echo $id_kursus;?>">
									<input type="text" id="id_kursus1" name="id_kursus1" class="form-control" value="<?php echo $id_kursus;?>" disabled>
								</div>
								<div class="form-group">
									<input type="text" id="nama_kursus" name="nama_kursus" placeholder="Nama kursus" class="form-control" value="<?php echo $nama_kursus;?>" maxlength="100">
								</div>
								<div class="form-group">
									<input type="text" id="biaya_kursus" name="biaya_kursus" placeholder="Biaya kursus" class="form-control" value="<?php echo $biaya_kursus;?>">
								</div>
								<div class="form-group">
									<input type="text" id="id_pengajar" name="id_pengajar" placeholder="ID Pengajar" class="form-control" value="<?php echo $id_pengajar;?>">
								</div>
								<div class="form-group">
									<input type="text" id="id_ruang" name="id_ruang" placeholder="ID Ruang" class="form-control" value="<?php echo $id_ruang;?>">
								</div>
								<div class="form-group">
									<input type="text" id="jam" name="jam" placeholder="00:00:00" class="form-control" value="<?php echo $jam;?>">
								</div>
								<div class="form-group">
									<input type="text" id="hari" name="hari" placeholder="Hari Kursus" class="form-control" value="<?php echo $hari;?>">
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-md btn-block">Simpan Perubahan Data Kursus</button>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="col-sm-8">
						<div align="center">
							Data Pengajar<br>
							&nbsp;
						</div>
						<table border="1" style="width:100%">
							<thead>
								<tr>
									<td align="center" style="width:50%">ID Pengajar</td>
									<td align="center" style="width:50%">Nama Pengajar</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach($data_pengajar->result_array() as $dp)
									{
								?>
								<tr>
									<td align="center" style="width:50%"><?php echo $dp['id_pengajar']; ?></td>
									<td align="center" style="width:50%"><?php echo $dp['nama_pengajar']; ?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						
						<div align="center">
							&nbsp;
							Data Ruang<br>
							&nbsp;
						</div>
						<table border="1" style="width:100%">
							<thead>
								<tr>
									<td align="center" style="width:50%">ID Ruang</td>
									<td align="center" style="width:50%">Nama Ruang</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach($data_ruang->result_array() as $dr)
									{
								?>
								<tr>
									<td align="center" style="width:50%"><?php echo $dr['id_ruang']; ?></td>
									<td align="center" style="width:50%"><?php echo $dr['nama_ruang']; ?></td>
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
		<script type="text/javascript">
			$('#id_kursus').change(function(){
				var id_kursus = $("#id_kursus").val();
				$.ajax({ 
						url: "<?php echo base_url(); ?>index.php/data_kursus/ambil_data_kursus_ajax", 
						data: "id_kursus="+id_kursus, 
						cache: false, 
						success: function(msg){ 
						$("#data_kursus").html(msg); 
					} 
				})
			});
		</script>
	</body>
</html>
