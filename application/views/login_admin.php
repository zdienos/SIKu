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
					<h1>Login Administrator</h1>
				</div>
			</div>
		</header>
		
		<section id="registration" class="container">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-4">
                    <div align="center">
                        <img src="<?php echo base_url(); ?>/assets/icons/adminicon.png" width="50%"><br>
                        &nbsp;
					</div>
                    <form class="center" role="form" action="<?php echo base_url(); ?>index.php/cek_login_admin" method="post">
						<fieldset>
							<div class="form-group">
								<input type="text" id="id_admin" name="id_admin" placeholder="ID Admin" class="form-control">
							</div>
							<div class="form-group">
								<input type="password" id="password" name="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-primary btn-md btn-block">Masuk</button>
							</div>
						</fieldset>
					</form>
					</div>
					<div class="col-sm-4">
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
