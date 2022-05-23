<?php
session_start();
require_once './const_conn.php';
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$dados_st = array_map('strip_tags', $dados_rc);
$dados = array_map('trim', $dados_st);



$result_member = "SELECT id FROM `members` WHERE c_p_f='" . $dados['cpf'] . "'";
$resultado_usuario = mysqli_query($conn, $result_member);

if (($resultado_usuario) and ($resultado_usuario->num_rows != 0)) {	
	echo 2; //erro membro já existente
}else{

	if (isset($_FILES["photo"])) {
		$arquivo = $_FILES["photo"];
		$pasta_dir = "../upload/img/member-photo/";
	
		if (!file_exists($pasta_dir)) {
			mkdir($pasta_dir);
		}
		$arquivo_nome = $pasta_dir . $arquivo["name"];

		move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
		
		if ($arquivo["name"] != '') {
			$arquivo_nome = "./upload/img/member-photo/".$arquivo["name"];
		}else {
			$arquivo_nome = ($dados['sexo'] == 1) ? './upload/img/member-photo/default/avatar_boy.png' : './upload/img/member-photo/default/avatar_girl.png' ;
		}
	}
	
	$nome_filho = [];

	if (!empty($dados['totalFilho'])) {
		$dados['num_filho'] = $dados['totalFilho'];	
		$a = 1;
		while ($a <= $dados['totalFilho']) {
			$filho = $dados['nome_filho'.$a]; //add essa variável no array $nome_filho
			array_push($nome_filho,$filho);
			$a++;
		}

		$nome_filho = implode(',', $nome_filho);
	} else {
		$dados['num_filho'] = '0';
		$nome_filho = '0';
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


	$cad_membro = "INSERT INTO `members`(`first_name`, `second_name`, `path_image`, `name_father`, `name_mother`, `marital_status`, `conjuge_name`, `sex`, `schooling`, `status_schooling`, `son`, `amount_son`, `name_son`, `comungante`, `baptism_date`, `type_admission`, `id_select_ministerial_function`, `previous_church`, `identity_card`, `identity_emitter`, `state_emitter`, `date_expedition`, `id_select_city_of_birth`, `date_birth`, `c_p_f`, `cep`, `street`, `number_house`, `complement`, `neighborhood`, `uf_cep`, `city_cep`, `telephone`, `cellphone`, `email`, `status`, `date_register`,`id_user`) VALUES ('".$dados['nome']."','".$dados['sobrenome']."','$arquivo_nome','".$dados['nome_pai']."','".$dados['nome_mae']."','".$dados['cod_estado_civil']."','".$dados['conjuge']."','".$dados['sexo']."','".$dados['escolaridade']."','".$dados['escolaridade_status']."','".$dados['filho']."','".$dados['num_filho']."','".$nome_filho."','".$dados['comunga']."','".$dados['data_batismo']."','".$dados['tipo_admissao']."','".$dados['funcao_ministerio']."','".$dados['igreja_anterior']."','".$dados['rg']."','".$dados['rg_orgao']."','".$dados['rg_estado']."','".$dados['rg_expedicao']."','".$dados['cidade_nasc']."','".$dados['data_nascimento']."','".$dados['cpf']."','".$dados['cep']."','".$dados['rua']."','".$dados['numero']."','".$dados['complemento']."','".$dados['bairro']."','".$dados['uf_cep']."','".$dados['cidade']."','".$dados['telefone']."','".$dados['celular']."','".$dados['email']."','1',NOW(), '".$_SESSION['id']."')";

	$resultado_usuario = mysqli_query($conn, $cad_membro);


	if (mysqli_insert_id($conn)) {
		echo 1;//deu certo
	} else {
		echo 0;//deu errado
	}
	
}
