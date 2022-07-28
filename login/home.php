<?php
session_start();
	require_once '../assets/lang/pt-br.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?= $title ?> - Login</title>
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
			<div class="wrap-login100 p-l-55 p-r-55 p-t-30 p-b-30">
				<form class="login100-form validate-form" action="../php/valida.php" method="POST">
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

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Campo Usuário vazio!">
						<span class="label-input100"><?= $label_user ?></span>
						<input class="input100" type="text" id='user' name="user" placeholder="<?= $placeholder_user ?>" autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Campo Senha vazio!">
						<span class="label-input100"><?= $label_pass ?></span>
						<input class="input100" type="password" id='pass' name="pass" placeholder="<?= $placeholder_pass ?>">
						<span class="focus-input100" data-symbol="&#xf183;"></span>
					</div>

					<!--<div class="text-right p-t-12 p-b-25">
						<a href="#">
							<?= $label_forgot_pass ?>
						</a>
					</div>-->

					<div class="btn-login p-t-40">
						<button type="submit" id='btnSub' class="btn btn-block btn-secondary"><?= $button_login ?></button>	
					</div>

					<div class="btn-login p-t-30">
						<button onclick="window.location.href = './recovery_key.php'" type="button" class="btn btn-block btn-secondary"><?= $button_recovery ?></button>
					</div>
				</form>

				<div class="text-right p-t-30">
					<p>ChurchLog© 2017-<?= date('Y')?></p>
				</div>

			</div>
		</div>
	</div>

	<script src="../plugins/jquery/jquery.min.js"></script>
	<script src='../dist/js/pages/login.js'></script>

	<script>
		alert('User: usuario / Password: 123456');
	</script>
</body>
</html>