<?php
require_once './const_conn.php';
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$name = $_POST['nome_cadastro'];
$name_manager = $_POST['nome_responsavel'];
$type = $_POST['tipo_dep'];

$result_member = "SELECT `id` FROM `departament` WHERE `name` = '" . $name . "'";
$resultado_usuario = mysqli_query($conn, $result_member);

if (($resultado_usuario) and ($resultado_usuario->num_rows != 0)) {	
	echo 2; //departamento existente
}else {

    $sql = "INSERT INTO `departament` (`name`, `id_members`, `type`, `date_create`) VALUES ('$name','2', '$type',NOW());";
    $resultado_usuario = mysqli_query($conn, $sql);

	if (mysqli_insert_id($conn)) {
		echo 1;//deu certo
	} else {
		echo 0;//deu errado
	}
}

