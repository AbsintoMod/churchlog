<?php
session_start();

    $lang = $_SESSION['lang'];
    require_once '../assets/lang/' . $lang . '.php';
    require_once './const_conn.php';
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//classe card_department
class CardDep {
	public $departamento;
	public $setor;
    public $grupo;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

$card_department = new CardDep();

//total departamentos
    $sql = "SELECT COUNT(*) FROM `departament`;";
    $count = mysqli_query($conn, $sql);
    $counter = mysqli_fetch_array($count);
    $counter = $counter[0];
    $card_department ->__set('departamento', $counter);

//total setores
    $sql = "SELECT COUNT(*) FROM `departament` WHERE `type` = '$info_sectors'";
    $count = mysqli_query($conn, $sql);
    $counter = mysqli_fetch_array($count);
    $counter = $counter[0];
    $card_department ->__set('setor', $counter);

//total grupos
    $sql = "SELECT COUNT(*) FROM `departament` WHERE `type` = '$menu_groups'";
    $count = mysqli_query($conn, $sql);
    $counter = mysqli_fetch_array($count);
    $counter = $counter[0];
    $card_department ->__set('grupo', $counter);

echo json_encode($card_department);