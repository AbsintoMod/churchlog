<?php
//Recebe o id via ajax 
$id = $_POST["id"];

//inclui a conexao com o banco de dados
require_once 'conexao.php';

//faz a busca da cidade, baseada no ID do estado
$buscaCidade = mysqli_query($conn, "SELECT select_city.id, select_city.city FROM select_city INNER JOIN select_state ON select_state.id = select_city.id_select_state WHERE select_city.id_select_state = $id;");


//itera o while  cada resultado encontrado
while ($cidade = mysqli_fetch_object($buscaCidade)) :

    echo "<option value='$cidade->id'> $cidade->city </option>";

endwhile;