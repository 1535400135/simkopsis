<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
	<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
	<title>Login Koperasi</title>

	<!-- Favicons-->
	<link rel="icon" href="<?= base_url('assets/images/favicon/order-app-logo.png') ?>" sizes="32x32">
	<!-- Favicons-->
	<link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/images/favicon/apple-touch-icon-152x152.png') ?>">
	<!-- For iPhone -->
	<meta name="msapplication-TileColor" content="#00bcd4">
	<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
	<!-- For Windows Phone -->


	<!-- CORE CSS-->
	<link href="<?= base_url('assets/css/materialize.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('assets/css/style.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('assets/css/plugins/animate.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<!-- Custome CSS-->
	<link href="<?= base_url('assets/css/custom/custom-style.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">


	<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
	<link href="<?= base_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('assets/js/plugins/jvectormap/jquery-jvectormap.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('assets/js/plugins/chartist-js/chartist.min.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('assets/css/layouts/page-center.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('assets/js/plugins/prism/prism.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body class="teal">



	<div id="login-page" class="row">
		<div class="col s12 z-depth-4 card-panel">
			<form class="login-form" action="<?= base_url('login') ?>" method="post">
				<div class="row">
					<div class="input-field col s12 center">
						<img src="<?= base_url('assets/images/favicon/alfa-polimer.png') ?>" alt="" class=" responsive-img valign profile-image-login">
						<p class="center login-form-text">KOPERASI PT. ALFA POLIMER INDONESIA</p>
					</div>
				</div>
				<div class="row margin">
					<?php if ($this->session->flashdata('alert') === 'error-login') : ?>
						<div id="card-alert" class="card red lighten-5 animated slideInDown ">
							<div class="card-content red-text " style="padding: 6px !important;">
								<p>gunakan username & password yang benar!</p>
							</div>
						</div>
					<?php endif; ?>
					<div class="input-field col s12">
						<i class="mdi-social-person-outline prefix"></i>
						<input id="username" type="text" name="username" required>
						<label for="username" class="center-align">Nama Pengguna</label>
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="mdi-action-lock-outline prefix"></i>
						<input id="password" type="password" name="password" required>
						<label for="password">Kata Sandi</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<button type="submit" name="login" class="btn waves-effect waves-light col s12">Login</button>
					</div>
				</div>

				<div class="row">
					<div class="input-field ">
						<p class="margin right-align medium-small">
							Managed by <a href="<?= base_url(); ?>" title="koperasi" target="_blank">KoperasiAlfa</a>
						</p>
					</div>
				</div>

			</form>
		</div>
	</div>



	<!-- ================================================
	Scripts
	================================================ -->

	<!-- jQuery Library -->
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/jquery-1.11.2.min.js') ?>"></script>
	<!--materialize js-->
	<script type="text/javascript" src="<?= base_url('assets/js/materialize.min.js') ?>"></script>
	<!--scrollbar-->
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>


	<!-- chartist -->
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/chartist-js/chartist.min.js') ?>"></script>

	<!-- chartjs -->
	<!--<script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>-->
	<!--<script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>-->

	<!-- sparkline -->
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/sparkline/sparkline-script.js') ?>"></script>


	<!--plugins.js - Some Specific JS codes for Plugin Settings-->
	<script type="text/javascript" src="<?= base_url('assets/js/plugins.min.js') ?>"></script>
	<!--custom-script.js - Add your own theme custom JS-->
	<script type="text/javascript" src="<?= base_url('assets/js/custom-script.js') ?>"></script>
	<!-- Toast Notification -->
	<script type="text/javascript">

	</script>

</body>

</html>