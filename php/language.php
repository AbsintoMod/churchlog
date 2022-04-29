<?php
session_start();
require_once 'conexao.php';

$id = $_SESSION['id'];
$lang = $_GET['lang'];

$sql = "UPDATE `user` SET `lang` = '$lang' WHERE `user`.`id` = '$id'";

try {
    mysqli_query($conn, $sql);

        $_SESSION['lang'] = $lang;
        header("Location:../login/start.php");
} catch (\Throwable $th) {
    echo 'erro ao trocar Language'. $th;
}