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
					<h1>Input Data Iuran</h1>
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
						<form class="center" role="form" action="<?php echo base_url(); ?>index.php/data_iuran/simpan_data_iuran" method="post">
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
								<div id="rincian_data_peserta_kursus"></div>
							</fieldset>
						</form>
					</div>
					
					<div class="col-sm-6">
						<h4>Record Pembayaran Iuran Peserta</h4>
						<div id="rincian_data_iuran_peserta_kursus"></div>
						<div id="jumlah_iuran_peserta_kursus"></div>
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
			$('#id_peserta').change(function(){
				var id_peserta = $("#id_peserta").val();
				$.ajax({ 
						url: "<?php echo base_url(); ?>index.php/data_iuran/ambil_data_peserta_ajax", 
						data: "id_peserta="+id_peserta, 
						cache: false, 
						success: function(msg){ 
						$("#rincian_data_peserta_kursus").html(msg); 
					} 
				})
			});
		</script>
		
		<script type="text/javascript">
			$('#id_peserta').change(function(){
				var id_peserta = $("#id_peserta").val();
				$.ajax({ 
						url: "<?php echo base_url(); ?>index.php/data_iuran/ambil_data_jumlah_iuran_peserta_ajax", 
						data: "id_peserta="+id_peserta, 
						cache: false, 
						success: function(msg){ 
						$("#jumlah_iuran_peserta_kursus").html(msg); 
					} 
				})
			});
		</script>
		
		<script type="text/javascript">
			$('#id_peserta').change(function(){
				var id_peserta = $("#id_peserta").val();
				$.ajax({ 
						url: "<?php echo base_url(); ?>index.php/data_iuran/ambil_data_iuran_peserta_ajax", 
						data: "id_peserta="+id_peserta, 
						cache: false, 
						success: function(msg){ 
						$("#rincian_data_iuran_peserta_kursus").html(msg); 
					} 
				})
			});
		</script>
		
	</body>
</html>
