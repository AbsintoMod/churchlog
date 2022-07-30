<?php
$_POST['nome_cadastro'] = $name;
$_POST['nome_responsavel'] = $name_manager;
$_POST['tipo_dep'] = $type;


/*INSERT INTO `departament` (`name`, `id_members`, `type`, `date_create`) VALUES ('$name', '7', '$type', 'NOW()');*/

print_r($_POST);
