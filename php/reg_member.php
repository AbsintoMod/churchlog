<?php
session_start();
require_once './const_conn.php';
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);


	//alimentar variavel filho
	//$nome_filho = array( $dados['nome_filho1'], $dados['nome_filho2'], $dados['nome_filho3'], $dados['nome_filho4'], $dados['nome_filho5'], $dados['nome_filho6']);
	


	$nome_filho = array();
	if (empty($nome_filho)) {
		$nome_filho = '0';
	}

	if (!empty($dados['totalFilho'])) {
		$dados['num_filho'] = $dados['totalFilho'];
	} else {
		$dados['num_filho'] = '0';
	}
	
	if (empty($dados['photo'])) {
		//$dados['photo'] = 'default';
	}

	if (empty($dados['conjuge'])) {
		$dados['conjuge'] = 'Não Possui';
	}
	if (empty($dados['igreja_anterior'])) {
		$dados['igreja_anterior'] = 'Não Possui';
	}
	
	if (empty($dados['numero'])) {
		$dados['numero'] = 'S/N';
	}
	if (empty($dados['complemento'])) {
		$dados['complemento'] = 'Não Possui';
	}
	if (empty($dados['telefone'])) {
		$dados['telefone'] = '(00) 00000-0000';
	}
	if (empty($dados['data_batismo'])) {
		$dados['data_batismo'] = '0000-00-00';
	}
/*
	echo '<pre>'; 
	print_r($dados);
	echo '</pre>';
*/
	$cad_membro = "INSERT INTO `members`(`first_name`, `second_name`, `path_image`, `name_father`, `name_mother`, `marital_status`, `conjuge_name`, `sex`, `schooling`, `status_schooling`, `son`, `amount_son`, `name_son`, `comungante`, `baptism_date`, `type_admission`, `id_select_ministerial_function`, `previous_church`, `identity_card`, `identity_emitter`, `state_emitter`, `date_expedition`, `id_select_city_of_birth`, `date_birth`, `c_p_f`, `cep`, `street`, `number_house`, `complement`, `neighborhood`, `uf_cep`, `city_cep`, `telephone`, `cellphone`, `email`, `status`, `date_register`) VALUES ('".$dados['nome']."','".$dados['sobrenome']."','".$dados['photo']."','".$dados['nome_pai']."','".$dados['nome_mae']."','".$dados['cod_estado_civil']."','".$dados['conjuge']."','".$dados['sexo']."','".$dados['escolaridade']."','".$dados['escolaridade_status']."','".$dados['filho']."','".$dados['num_filho']."','".$nome_filho."','".$dados['comunga']."','".$dados['data_batismo']."','".$dados['tipo_admissao']."','".$dados['funcao_ministerio']."','".$dados['igreja_anterior']."','".$dados['rg']."','".$dados['rg_orgao']."','".$dados['rg_estado']."','".$dados['rg_expedicao']."','".$dados['cidade_nasc']."','".$dados['data_nascimento']."','".$dados['cpf']."','".$dados['cep']."','".$dados['rua']."','".$dados['numero']."','".$dados['complemento']."','".$dados['bairro']."','".$dados['uf_cep']."','".$dados['cidade']."','".$dados['telefone']."','".$dados['celular']."','".$dados['email']."','1',NOW())";

		$resultado_usuario = mysqli_query($conn, $cad_membro);

		if (mysqli_insert_id($conn)) {
			echo 1;//deu certo
		} else {
			echo 0;//deu errado
		}
		?>