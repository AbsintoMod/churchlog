<?php
session_start();
require_once './const_conn.php';
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	$erro = false;

	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);

    echo'<pre>';
    print_r($dados);
    echo'</pre>';
	

	$dados['matricula'] =						 'AUTOINCREMENT';
    $dados['emailc'] =							 'somente para verificação';


	
	/*
	$dados['photo'] =							 `path_image` , 'VARCHAR' , 'NULL'; 
    $dados['nome'] =							 `first_name` , 'VARCHAR' , 'NOT-NULL';
    $dados['sobrenome'] =						 `second_name` , 'VARCHAR' , 'NOT-NULL';
    $dados['nome_pai'] =						 `name_father` , 'VARCHAR' , 'NULL';
    $dados['nome_mae'] =						 `name_mother` , 'VARCHAR' , 'NOT-NULL';
    $dados['cod_estado_civil'] =				 `marital_status` , 'INT=1' , 'NOT-NULL';
    $dados['conjuge'] =							 `conjuge_name` , 'VARCHAR' , 'NULL';
    $dados['sexo'] =							 `sex` , 'VARCHAR' , 'NOT-NULL';
    $dados['escolaridade'] =					 `schooling` , 'VARCHAR' , 'NOT-NULL';
    $dados['escolaridade_status'] =				 `status_schooling` , 'VARCHAR' , 'NOT-NULL';
    $dados['filho'] =							 `son` , 'CHAR = 1' , 'NOT-NULL';
    $dados['num_filho'] =						 `amount_son` , 'INT = 1' , 'PRE=0';
    $dados['nome_filho1'] =						 `name_son` , 'STRING = ARRAY' , 'NULL';
    $dados['comunga'] =							 `comungante` , 'CHAR=1' , 'NOT-NULL';
    $dados['data_batismo'] =					 `baptism_date` , 'DATE' , 'NULL';
    $dados['tipo_admissao'] =					 `type_admission` , 'INT=1' , 'NOT-NULL';
    $dados['funcao_ministerio'] =				 `id_select_ministerial_function` , 'INT=1' , 'NOT-NULL';
    $dados['igreja_anterior'] =					 `previous_church` , 'STRING' , 'NULL';
    $dados['rg'] =							 	 `identity_card` , 'INT=15' , 'NULL';
    $dados['rg_orgao'] =						 `identity_emitter` , 'STRING' , 'NULL';
    $dados['rg_estado'] =						 `state_emitter` , 'STRING=2' , 'NULL';
    $dados['rg_expedicao'] =					 `date_expedition` , 'DATE' , 'NULL';
    $dados['cidade_nasc'] =						 `id_select_city_of_birth` , 'INT' , 'NOT-NULL';
    $dados['data_nascimento'] =					 `date_birth` , 'DATE' , 'NOT-NULL';
    $dados['cpf'] =								 `c_p_f` , 'VARCHAR' , 'NOT-NULL';
    $dados['cep'] =								 `cep` , 'VARCHAR' , 'NULL';
    $dados['rua'] =								 `street` , 'STRING' , 'NOT-NULL';
    $dados['numero'] =							 `number_house` , 'STRING' , 'PRE=s/n';
    $dados['bairro'] =							 `neighborhood` , 'STRING' , 'NOT-NULL';
    $dados['complemento'] =						 `complement` , 'STRING' , 'NULL';
    $dados['uf'] =								 `uf_cep` , 'CHAR=3' , 'NOT-NULL';
    $dados['cidade'] =							 `city_cep` , 'STRING' , 'NOT-NULL';
    $dados['telefone'] =						 `telephone` , 'VARCHAR' , 'NULL';
    $dados['celular'] =							 `cellphone` , 'VARCHAR' , 'NULL';
    $dados['email'] =							 `email` , 'VARCHAR' , 'NULL';
*/
?>