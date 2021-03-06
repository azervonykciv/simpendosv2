<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>AdminLTE 2 | Dashboard</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.2 -->
	<link href="<?php echo base_url('asset/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
	<!-- Font Awesome Icons -->
	<link href="<?php echo base_url('asset/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="<?php echo base_url('asset/ionicons-2.0.1/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="<?php echo base_url('asset/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
	<link href="<?php echo base_url('asset/AdminLTE-2.0.5/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url()?>asset/js/html5shiv.min.js"></script>
	<script src="<?php echo base_url()?>asset/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html"><b>Simpendos</b></a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Silahkan Masuk ke Sistem</p>
		<?php echo form_open('login/do_login') ?>
			<div class="form-group has-feedback">
				<input type="text" class="form-control" name="Nama_User" placeholder="Email"/>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="Password" placeholder="Password"/>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-12">
				<?php echo  $recaptcha_html ?></div>

				
			</div>
			<div class="row">
				<div class="col-xs-8">
				<br>
					<div class="checkbox icheck">
						<label>
							<input type="checkbox"> Remember Me
						</label>
					</div>
				</div><!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
				</div><!-- /.col -->
			</div>
		<?php echo form_close(); ?>

	</div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<script src="<?php echo base_url('asset/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url('asset/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('asset/AdminLTE-2.0.5/plugins/slimScroll/jquery.slimScroll.min.js') ?>" type="text/javascript"></script>
<!-- FastClick -->
<script src='<?php echo base_url('asset/AdminLTE-2.0.5/plugins/fastclick/fastclick.min.js') ?>'></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/AdminLTE-2.0.5/dist/js/app.min.js') ?>" type="text/javascript"></script>

</body>
</html>