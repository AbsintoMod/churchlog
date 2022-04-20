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

	if (in_array('', $dados)) {
		$erro = true;
		$_SESSION['msg'] = "<div class='alert alert-danger'>Necessário preencher todos os campos!</div>";
	} elseif ((strlen($dados['senha'])) < 6) {
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

		$result_usuario = "INSERT INTO user (name, email, user, pass, date_create, id_nivel) VALUES (
			'" . $dados['nome'] . "','" . $dados['email'] . "','" . $dados['usuario'] . "','" . $dados['senha'] . "',NOW(),'" . $dados['nivel'] . "')";

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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ChurchLog | Registro</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="../plugins/iCheck/square/blue.css">
	<!-- icone-->
	<link rel="sortcut icon" href="../img/icon.png" type="image/x-icon" />
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="index.php"><b>Church</b> Log</a>
		</div>

		<div class="register-box-body">
			<p class="login-box-msg">Registro de Novo Usuário</p>
			<?php
			if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
			<form method="POST" action="">
				<!--<label>Nome</label>-->
				<div class="form-group has-feedback">
					<input type="text" name="nome" placeholder="Nome" class="form-control" autofocus>
					<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
				</div>
				<!--<label>E-mail</label>-->
				<div class="form-group has-feedback">
					<input type="text" name="email" placeholder="E-mail" class="form-control">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<!--<label>Usuário</label>-->
				<div class="form-group has-feedback">
					<input type="text" name="usuario" placeholder="Login - Max. 10 caracteres" class="form-control" maxlength="10">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<!--<label>Senha</label>-->
				<div class="form-group has-feedback">
					<input type="password" name="senha" placeholder="Senha" class="form-control">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<!--<label>Repetir Senha</label>-->
				<div class="form-group has-feedback">
					<input type="password" name="senha2" placeholder="Repetir Senha" class="form-control">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<label>Nível de Acesso</label>
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
				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">
							<label>
								<input type="checkbox" required> Eu aceito os <a href="termo.html">Termos</a>
							</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<input type="submit" name="btnCadUsuario" value="Salvar" class="btn btn-primary btn-block btn-flat">
					</div>
					<!-- /.col -->
				</div>
			</form>
			<a href="../index.php" class="text-center">Eu ja possuo login criado!</a>
		</div>
		<!-- /.form-box -->
	</div>
	<!-- /.register-box -->

	<!-- jQuery 3 -->
	<script src="../bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="../plugins/iCheck/icheck.min.js"></script>
	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</body>

</html>