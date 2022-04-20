<?php
session_start();
	require_once '../assets/lang/pt-br.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?= $title ?> - Recuperação</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="../dist/img/logo.png">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<?php require '../assets/head/font_awesome.php'?>
	
	<!--icones dos campos-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--CSS Page-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="#" method="POST">
					<div class='form-header p-b-49'>
						<img src="../dist/img/logo.png" alt="logo">
						<span class="login100-form-title ">
							Login
						</span>
					</div>

					<!--message error-->
					<?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						if(isset($_SESSION['msgcad'])){
							echo $_SESSION['msgcad'];
							unset($_SESSION['msgcad']);
						}
					?>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "E-Mail Invalido!">
						<span class="label-input100"><?= $label_email ?></span>
						<input class="input100" type="email" id='email' name="email" placeholder="<?= $placeholder_email ?>" autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf15a;"></span>
					</div>

					<div class="btn-login p-t-40">
						<button type="submit" id='btnSub' class="btn btn-block btn-secondary"><?= $button_send ?></button>	
					</div>

					<div class="btn-login p-t-30">
						<button onclick="window.location.href = './home.php'" type="button" class="btn btn-block btn-secondary"><?= $button_go_back ?></button>
					</div>
				</form>

				<div class="text-right p-t-20 p-b-1">
					<p>ChurchLog© 2017-<?= date('Y')?></p>
				</div>

			</div>
		</div>
	</div>

	<script src="../plugins/jquery/jquery.min.js"></script>
	<script src='../dist/js/pages/register1.js'></script>

</body>
</html>