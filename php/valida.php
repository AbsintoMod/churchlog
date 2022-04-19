<?php
session_start();
require_once("./conexao.php");
	
$usuario = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

$result_usuario = "SELECT id, name, email, user, pass FROM user WHERE '$usuario' = user LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);

	if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
		$row_usuario = mysqli_fetch_assoc($resultado_usuario);

		if(password_verify($senha, $row_usuario['pass'])){
			$_SESSION['id'] = $row_usuario['id'];
			$_SESSION['name'] = $row_usuario['name'];
			$_SESSION['email'] = $row_usuario['email'];
			$_SESSION['user'] = $row_usuario['user'];
			$_SESSION['pass'] = $row_usuario['pass'];

			$date = date("Y-m-d");
			$hour = date('H:i:s');		
			$grava_log = "INSERT INTO `report_login`(`id_user`, `date`, `hour`) VALUES ('".$_SESSION['id']."','".$date."','".$hour."')";
			mysqli_query($conn, $grava_log);
			
			header("Location:../login/start.php");
		}else{
			$_SESSION['msg'] = "<div class='alert alert-danger'>Senha incorreta!</div>";
			header("Location:../login/home.php");
		}

	}else{ 
		$_SESSION['msg'] = "<div class='alert alert-danger'>Usuário não cadastrado!</div>";
		header("Location:../login/home.php");	
	}