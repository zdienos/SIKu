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
					<h1>Input Data Peserta</h1>
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
						<form class="center" role="form" action="<?php echo base_url(); ?>index.php/data_peserta/simpan_data_peserta" method="post">
							<fieldset>
								<div class="form-group">
									<input type="text" id="id_peserta" name="id_peserta" placeholder="ID Peserta" class="form-control" value="<?php echo set_value('id_peserta');?>" maxlength="7">
								</div>
								<div class="form-group">
									<input type="text" id="nama_peserta" name="nama_peserta" placeholder="Nama Peserta" class="form-control" value="<?php echo set_value('nama_peserta');?>" maxlength="50">
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
									<select name="id_kursus1" id="id_kursus1" class="form-control" >
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
									<button class="btn btn-success btn-md btn-block">Simpan Data Peserta</button>
								</div>
							</fieldset>
						</form>
					</div>
					
					<div class="col-sm-6">
						<h4>5 Data Peserta Teratas Berdasar ID Kursus</h4>
						<?php echo validation_errors(); ?>
						<form class="center" role="form" action="" method="post">
							<fieldset>
								<div class="form-group">
									<select name="id_kursus" id="id_kursus" class="form-control" >
										<option value="">Silahkan Pilih ID Kursus</option>
										<?php foreach($data_kursus->result_array() as $dk)
											{
										?>
										<option value="<?php echo $dk['id_kursus']; ?>"><?php echo $dk['id_kursus']; ?> - <?php echo $dk['nama_kursus']; ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div id="data_peserta_kursus"></div>
							</fieldset>
						</form>
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
						url: "<?php echo base_url(); ?>index.php/data_peserta/ambil_data_peserta_ajax", 
						data: "id_kursus="+id_kursus, 
						cache: false, 
						success: function(msg){ 
						$("#data_peserta_kursus").html(msg); 
					} 
				})
			});
		</script>
	</body>
</html>
