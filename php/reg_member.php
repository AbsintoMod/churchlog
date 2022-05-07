<?php
session_start();
require_once './const_conn.php';
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	$erro = false;

	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);

    echo'<pre>';
    print_r($dados);
    echo'</pre>';
/*
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
*/
?>