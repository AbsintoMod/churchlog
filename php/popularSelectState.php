<?php

$id = $_POST["id"];

require_once 'conexao.php';

$buscaEstado = mysqli_query($conn, "SELECT select_state.id, select_state.state FROM select_state INNER JOIN select_country ON select_country.id = select_state.id_select_country WHERE select_state.id_select_country = $id;");

while ($estado = mysqli_fetch_object($buscaEstado)):
    echo "<option value='$estado->id'>$estado->state</option>";
endwhile;