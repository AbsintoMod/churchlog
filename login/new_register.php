<?php
session_start();
ob_start();
require_once '../assets/lang/pt-br.php';
require_once '../php/const_conn.php';
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);

if ($btnCadUsuario) {

	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	$erro = false;

	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);


	if ((strlen($dados['senha'])) < 6) {
		$erro = true;
		$_SESSION['msg'] = "<div class='alert alert-danger'>A senha deve ter no mínimo 6 caracteres!</div>";
	} elseif (stristr($dados['senha'], "'")) {
		$erro = true;
		$_SESSION['msg'] = "<div class='alert alert-danger'>Caractere ( ' ) utilizado na senha é inválido!</div>";
	} else {

		$result_usuario = "SELECT id FROM user WHERE user='" . $dados['usuario'] . "'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);

		if (($resultado_usuario) and ($resultado_usuario->num_rows != 0)) {
			$erro = true;
			$_SESSION['msg'] = "<div class='alert alert-danger'>Este usuário já está sendo utilizado!</div>";
		}

		$result_usuario = "SELECT id FROM user WHERE email='" . $dados['email'] . "'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);

		if (($resultado_usuario) and ($resultado_usuario->num_rows != 0)) {
			$erro = true;
			$_SESSION['msg'] = "<div class='alert alert-danger'>Este e-mail já está cadastrado!</div>";
		}
	}

	if (!$erro) {
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

		$result_usuario = "INSERT INTO user (name, email, user, pass, date_create, id_nivel, lang) VALUES (
			'" . $dados['nome'] . "','" . $dados['email'] . "','" . $dados['usuario'] . "','" . $dados['senha'] . "',NOW(),'" . $dados['nivel'] . "','" . $dados['lang'] . "')";

		$resultado_usario = mysqli_query($conn, $result_usuario);



		if (mysqli_insert_id($conn)) {
			$_SESSION['msgcad'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
			header("Location:./home.php");
		} else {
			$_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao cadastrar o usuário!</div>";
			header("Location:./home.php");
		}
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title><?= $title ?> - Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="../dist/img/logo.png">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<?php require '../assets/head/font_awesome.php' ?>

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

				<form class="login100-form validate-form" action="" method="POST">
					<div class='form-header p-b-49'>
						<img src="../dist/img/logo.png" alt="logo">
						<span class="login100-form-title ">
							Cadastro
						</span>
					</div>

					<!--message error-->
					<?php
						if (isset($_SESSION['msg'])) {
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
					?>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Campo Nome vazio!">
						<span class="label-input100">Nome</span>
						<input class="input100" type="text" name="nome" placeholder="Nome" autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Campo E-Mail vazio!">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="text" name="email" placeholder="E-mail" autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="row m-b-23">
						<div class="col-sm-6 col-12 m-b-23">
							<div class="wrap-input100 validate-input" data-validate="Campo Usuário vazio!">
								<span class="label-input100"><?= $label_user ?></span>
								<input class="input100" type="text" name="usuario" placeholder="Max. 10 carac." maxlength="10" autocomplete="off">
								<span class="focus-input100" data-symbol="&#xf206;"></span>
							</div>
						</div>
						<div class="col-sm-6 col-12">
							<label class="label-input100 m-b-20">Nível de Acesso</label>
							<select class="form-control" style="width: 100%;" name="nivel">
								<?php
								$nivel_access = "SELECT * FROM `access_nivel`";
								$valor_busca = mysqli_query($conn, $nivel_access);
								while ($row_nivel = mysqli_fetch_assoc($valor_busca)) {
									echo '<option value ="' . $row_nivel['id_nivel'] . '">' . $row_nivel['name'] . '</option>';
								}
								?>
							</select>
						</div>
					</div>

					<div class="row p-b-23">
						<div class="col-sm-6 col-12 m-b-23">
							<div class="wrap-input100 validate-input" data-validate="Campo Senha vazio!">
								<span class="label-input100"><?= $label_pass ?></span>
								<input class="input100" type="password" name="senha" placeholder="Senha">
								<span class="focus-input100" data-symbol="&#xf183;"></span>
							</div>
						</div>
						<div class="col-sm-6 col-12">
							<div class="wrap-input100 validate-input" data-validate="Campo Senha vazio!">
								<span class="label-input100">Repetir <?= $label_pass ?></span>
								<input class="input100" type="password" name="senha2" placeholder="Repetir Senha">
								<span class="focus-input100" data-symbol="&#xf183;"></span>
							</div>
						</div>
					</div>
					
					<!--<label>Language</label>-->
					<div class="form-group has-feedback">
						<input type="text" name="lang" placeholder="" class="form-control" value="pt-br" readonly>
					</div>

					<div class="">
						<label>
							<input type="checkbox" required> Eu aceito os <a href="termo.html">Termos</a>
						</label>
					</div>

					<div class="btn-login p-t-40">
						<input type="submit" id='btnSub' name="btnCadUsuario" class="btn btn-block btn-secondary">
					</div>

					<div class="btn-login p-t-30">
						<button onclick="window.location.href = './home.php'" type="button" class="btn btn-block btn-secondary">Eu ja possuo login criado!</button>
					</div>

				</form>

				<div class="text-right p-t-20 p-b-1">
					<p>ChurchLog© 2017-<?= date('Y') ?></p>
				</div>

			</div>
		</div>
	</div>

	<script src="../plugins/jquery/jquery.min.js"></script>
	<script src='../dist/js/pages/register1.js'></script>

</body>

</html>