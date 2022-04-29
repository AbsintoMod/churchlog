<?php
session_start();
require_once("./conexao.php");
	
$usuario = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

$result_usuario = "SELECT id, name, email, user, pass, id_nivel, lang FROM user WHERE '$usuario' = user LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);

	if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
		$row_usuario = mysqli_fetch_assoc($resultado_usuario);

		if(password_verify($senha, $row_usuario['pass'])){
			$_SESSION['id'] = $row_usuario['id'];
			$_SESSION['name'] = $row_usuario['name'];
			$_SESSION['email'] = $row_usuario['email'];
			$_SESSION['user'] = $row_usuario['user'];
			$_SESSION['pass'] = $row_usuario['pass'];

			//consulta o nivel de acesso
			/*$consulta_nivel = "SELECT access_nivel.name FROM access_nivel INNER JOIN user ON user.id_nivel = access_nivel.id_nivel WHERE user.id = '". $_SESSION['id']."';";*/

			$consulta_nivel = "SELECT `name` FROM `access_nivel` WHERE `id` = '".$row_usuario['id_nivel']."';";
			$resultado_nivel = mysqli_query($conn, $consulta_nivel);
			$row_nivel = mysqli_fetch_assoc($resultado_nivel);

			$_SESSION['nivel'] = $row_nivel['name'];
			$_SESSION['lang'] = $row_usuario['lang'];

			//grava log de acesso
			$date = date("Y-m-d");
			$hour = date('H:i:s');		
			$grava_log = "INSERT INTO `report_login`(`id_user`, `date`, `hour`) VALUES ('".$_SESSION['id']."','".$date."','".$hour."')";
			mysqli_query($conn, $grava_log);
			
			//direciona para proxima page
			header("Location:../login/start.php");
		}else{
			$_SESSION['msg'] = "<div class='alert alert-danger'>Senha incorreta!</div>";
			header("Location:../login/home.php");
		}

	}else{ 
		$_SESSION['msg'] = "<div class='alert alert-danger'>Usuário não cadastrado!</div>";
		header("Location:../login/home.php");	
	}