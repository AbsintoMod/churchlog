<?php
 session_start();

 $hash = $_SESSION['pass'];

//gerar senha hash local para teste
//$hash = password_hash("1", PASSWORD_DEFAULT);

$pass = implode($_GET);

$verify = password_verify($pass, $hash);

echo $verify;