<?php
	require_once './const_conn.php';
	
	try {
		$conn = mysqli_connect($servidor, $usuario, $senha);
		try {
			$data = mysqli_select_db($conn, $dbname); 
			
			session_start();
			$ts = (empty($_SESSION['id'])) ? header('Location:../login/home.php') : header('Location:../login/start.php'); 
		}catch (\Throwable $err) {
			//Error no Banco
			header('Location:../error/500/');
		}
	}catch (\Throwable $err) {
		//Error na Conexão
		header('Location:../error/503/');
		//echo 'Error na Conexão: '.$err->getCode( ).'. Mensagem: '.$err->getMessage( );//
	}
?>
