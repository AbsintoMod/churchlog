<?php
//session_start();
require_once '../php/const_conn.php';
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$nomes = ['Agatha', 'Agnes', 'Aisha', 'Alexandra', 'Alexia', 'Alice', 'Alícia', 'Ana Clara', 'Ana Júlia', 'Ana Laura', 'Ana Luísa', 'Ana Luiza', 'Andréia', 'Ângela', 'Anita', 'Antonella', 'Antônia', 'Ariane', 'Beatriz', 'Betina', 'Carina', 'Carol', 'Catarina', 'Cecília', 'Cibele', 'Clara', 'Clarice', 'Cristiana', 'Cristiane', 'Dandara', 'Daniele', 'Dayane', 'Denise', 'Diane', 'Edna', 'Eliana', 'Elisa', 'Elisângela', 'Elizabeth', 'Ellen', 'Eloá', 'Eloah', 'Emanuelly', 'Emmanuelle', 'Érika', 'Estela', 'Esther', 'Eva', 'Fabiana', 'Franciele', 'Francisca', 'Gabriela', 'Gabriele', 'Giovanna', 'Giulia', 'Hannah', 'Helena', 'Heloísa', 'Iara', 'Inês', 'Íris', 'Isabele', 'Isabella', 'Isabelle', 'Isabelly', 'Isadora', 'Isis', 'Izabele', 'Jade', 'Jenifer', 'Joseane', 'Júlia', 'Kamila', 'Karine', 'Karoline', 'Kátia', 'Keila', 'Kiara', 'Laiane', 'Laila', 'Laísa', 'Lana', 'Lara', 'Laura', 'Lavínia', 'Lia', 'Lídia', 'Lilian', 'Lis', 'Lívia', 'Liz', 'Lorena', 'Lorraine', 'Louise', 'Lúcia', 'Ludmila', 'Luiza', 'Maíra', 'Maísa', 'Maitê', 'Malu', 'Manuela', 'Mara', 'Margarida', 'Maria Alice', 'Maria Cecília', 'Maria Clara', 'Maria Eduarda', 'Maria Helena', 'Maria Júlia', 'Maria Luísa', 'Maria Luiza', 'Maria Vitória', 'Mariah', 'Mariana', 'Marília', 'Marina', 'Marisa', 'Marlene', 'Marta', 'Melissa', 'Micaela', 'Michelle', 'Miriam', 'Natalie', 'Natasha', 'Nayara', 'Ohana', 'Olívia', 'Paloma', 'Paola', 'Pérola', 'Rafaela', 'Rayssa', 'Rebeca', 'Regina', 'Rita', 'Rosa', 'Rosângela', 'Rute', 'Safira', 'Samantha', 'Samira', 'Sarah', 'Sheila', 'Silvana', 'Sílvia', 'Solange', 'Sônia', 'Sophia', 'Sophie', 'Sueli', 'Tainara', 'Tânia', 'Thalia', 'Thamires', 'Valentina', 'Valéria', 'Vânia', 'Verônica', 'Victória', 'Vivian', 'Yasmin','Alan', 'Alexandre', 'Alison', 'Anderson', 'André', 'Anthony', 'Antônio', 'Arthur', 'Benício', 'Benjamin', 'Bento', 'Bernardo', 'Bruno', 'Bryan', 'Caio', 'Calebe', 'Carlos', 'Cauã', 'César', 'Cristiano', 'Daniel', 'Davi', 'Davi Lucca', 'David', 'Diogo', 'Douglas', 'Eduardo', 'Emanuel', 'Enrico', 'Enzo', 'Enzo Gabriel', 'Fábio', 'Felipe', 'Fernando', 'Francisco', 'Gabriel', 'Gael', 'Guilherme', 'Gustavo', 'Heitor', 'Henrique', 'Hugo', 'Isaac', 'Jesus', 'João', 'João Lucas', 'João Miguel', 'João Pedro', 'Joaquim', 'Jonathan', 'José', 'Júlio', 'Júnior', 'Leandro', 'Leonardo', 'Levi', 'Lorenzo', 'Luan', 'Lucas', 'Lucca', 'Luciano', 'Luiz', 'Marcelo', 'Marcos', 'Mateus', 'Matheus', 'Miguel', 'Murilo', 'Nicolas', 'Noah', 'Pablo', 'Paulo', 'Pedro', 'Pedro Henrique', 'Pietro', 'Rafael', 'Ricardo', 'Samuel', 'Théo', 'Tiago', 'Vicente', 'Vinícius', 'Vitor', 'Wesley', 'William'];



$sobrenomes = ['Abreu', 'Adães', 'Adorno', 'Aguiar', 'Albuquerque', 'Alcântara', 'Aleluia', 'Alencar', 'Almeida', 'Altamirano', 'Alvarenga', 'Álvares', 'Alves', 'Alvim', 'Amaral', 'Amigo', 'Amor', 'Amorim', 'Anchieta', 'Andrada', 'Andrade', 'Anes', 'Anjos', 'Antunes', 'Anunciação', 'Aragão', 'Araújo', 'Arruda', 'Ascensão', 'Assis', 'Azeredo', 'Azevedo', 'Bandeira', 'Barbosa', 'Barros', 'Barroso', 'Bastos', 'Batista', 'Bermudes', 'Bernades', 'Bernardes', 'Bicalho', 'Bispo', 'Bocaiuva', 'Bolsonaro', 'Borba', 'Borges', 'Borsoi', 'Botelho', 'Braga', 'Bragança', 'Brandão', 'Brasil', 'Brasiliense', 'Bueno', 'Cabral', 'Café', 'Camacho', 'Camargo', 'Caminha', 'Camões', 'Cardoso', 'Carmo', 'Carnaval', 'Carneiro', 'Carvalhal', 'Carvalho', 'Carvalhosa', 'Castilho', 'Castro', 'Cerejeira', 'Chaves', 'Coelho', 'Coentrão', 'Coimbra', 'Constante', 'Cordeiro', 'Costa', 'Cotrim', 'Couto', 'Coutinho', 'Cruz', 'Cunha', 'Curado', 'Dambros', 'Dias', 'Diegues', 'Dorneles', 'Duarte', 'Eça', 'Encarnação', 'Esteves', 'Evangelista', 'Exaltação', 'Fagundes', 'Faleiros', 'Falópio', 'Falqueto', 'Faria', 'Farias', 'Faro', 'Ferrão', 'Ferraz', 'Ferreira', 'Ferrolho', 'Fernandes', 'Figo', 'Figueira', 'Figueiredo', 'Figueiroa', 'Fioravante', 'Fonseca', 'Fontes', 'Fortaleza', 'França', 'Freire', 'Freitas', 'Frota', 'Furquim', 'Furtado', 'Galvão', 'Gama', 'Garrastazu', 'Gato', 'Gomes', 'Gonçales', 'Gonçalves', 'Gonzaga', 'Gouveia', 'Guimarães', 'Gusmão', 'Henriques', 'Hernandes', 'Holanda', 'Homem', 'Hora', 'Hungria', 'Jardim', 'Junqueira', 'Lacerda', 'Lange', 'Leitão', 'Leite', 'Leme', 'Lins', 'Locatelli', 'Lopes', 'Luz', 'Macedo', 'Machado', 'Madureira', 'Maduro', 'Magalhães', 'Mairinque', 'Malafaia', 'Malta', 'Mariz', 'Marques', 'Martins', 'Massa', 'Matos', 'Médici', 'Meireles', 'Mello', 'Melo', 'Mendes', 'Mendonça', 'Menino', 'Mesquita', 'Miranda', 'Moraes', 'Morais', 'Morato', 'Moreira', 'Moro', 'Monteiro', 'Muniz', 'Namorado', 'Nantes', 'Nascimento', 'Navarro', 'Naves', 'Negreiros', 'Negrete', 'Neves', 'Nóbrega', 'Nogueira', 'Noronha', 'Nunes', 'Oliva', 'Oliveira', 'Outeiro', 'Pacheco', 'Padrão', 'Paes', 'Pais', 'Paiva', 'Paixão', 'Papanicolau', 'Parga', 'Pascal', 'Pascoal', 'Pasquim', 'Patriota', 'Peçanha', 'Pedrosa', 'Pedroso', 'Peixoto', 'Pensamento', 'Penteado', 'Pereira', 'Peres', 'Pessoa', 'Pestana', 'Pimenta', 'Pimentel', 'Pinheiro', 'Pinto', 'Pires', 'Poeta', 'Policarpo', 'Porto', 'Portugal', 'Prado', 'Prudente', 'Quaresma', 'Queirós', 'Queiroz', 'Ramalhete', 'Ramalho', 'Ramires', 'Ramos', 'Rangel', 'Reis', 'Resende', 'Ribeiro', 'Rios', 'Rodrigues', 'Roma', 'Romão', 'Sá', 'Sacramento', 'Sampaio', 'Sampaulo', 'Sampedro', 'Sanches', 'Santacruz', 'Santana', 'Santander', 'Santarrosa', 'Santiago', 'Santos', 'Saragoça', 'Saraiva', 'Saramago', 'Seixas', 'Serra', 'Serrano', 'Silva', 'Silveira', 'Simões', 'Siqueira', 'Soares', 'Soeiro', 'Sousa', 'Souza', 'Tavares', 'Teixeira', 'Teles', 'Torquato', 'Trindade', 'Uchoa', 'Uribe', 'Ustra', 'Valadares', 'Valença', 'Valente', 'Varela', 'Vasconcelos', 'Vasques', 'Vaz', 'Veiga', 'Velasques', 'Veloso', 'Viana', 'Vieira', 'Vilela', 'Vilhena', 'Xavier', 'Zampol'];


echo 'Nome: ';
//gerar nome	
	$rand_keys = array_rand($nomes, 2);
	$nome = $nomes[$rand_keys[0]] ."\n";
	echo $nome;
	
	echo '</br>Sobrenome: ';
//gerar sobrenome
$a=1;
$total_nomes = rand(2,3);
$sobrenome = '';
while ($a <= $total_nomes) {	
	$rand_keys = array_rand($sobrenomes, $total_nomes);
	$busca_sobrenome = $sobrenomes[$rand_keys[0]] ."\n";
	$a++;
	$sobrenome.= $busca_sobrenome;
	}
echo $sobrenome;

echo '</br>Nome do Pai: ';
//gerar nome do pai
$a=1;
$total_nomes = rand(2,4);
$nomePai = '';
while ($a <= $total_nomes) {	
	$rand_keys = array_rand($sobrenomes, $total_nomes);
	$busca_nomepai = $sobrenomes[$rand_keys[0]] ."\n";
	$a++;
	$nomePai .= $busca_nomepai;	
}
echo $nomePai;

echo '</br>Nome da Mãe: ';
//gerar nome do pai
$a=1;
$total_nomes = rand(2,4);
$nomeMae = '';
while ($a <= $total_nomes) {	
	$rand_keys = array_rand($sobrenomes, $total_nomes);
	$busca_nomeMae = $sobrenomes[$rand_keys[0]] ."\n";
	$a++;
	$nomeMae .= $busca_nomeMae;
}
echo $nomeMae;

echo '</br>Codigo Estado Civil: ';
//gerar nome	
	$estado_civil = rand(1, 5);
	echo $estado_civil;	

	echo '</br>Nome do Conjuge: ';
	if ($estado_civil === 2) {
		//gerar nome do conjuge
		$a=1;
		$conjuge = '';
		$total_nomes = rand(2,4);
		while ($a <= $total_nomes) {	
			$rand_keys = array_rand($sobrenomes, $total_nomes);
			$nome_conjuge = $sobrenomes[$rand_keys[0]] ."\n";
			$a++;
			$conjuge .= $nome_conjuge;
		}
		echo $conjuge;
	} else {
		$conjuge = 'Não possui';
		echo $conjuge;
	}
	



echo '</br>Sexo: ';
//gerar sexo	
	$sexo = rand(1, 2);
	echo $sexo;	

echo '</br>Escolaridade: ';
//gerar escolaridade	
	$escolaridade = rand(1, 7);
	echo $escolaridade;	

echo '</br>Escolaridade Status: ';
//gerar escolaridade_status	
	$escolaridade_status = rand(0, 1);
	echo $escolaridade_status;	

echo '</br>Filho: ';
//gerar filho	
	$filho = rand(0, 1);
	echo $filho;	

	if ($filho === 1) {
		//gerar filho
		$num_filho = rand(0, 6);
	} else {
		$num_filho = 0;
	}
	
echo '</br>Número de Filho: '.$num_filho;

echo '</br>Nome de Filhos: ';
//gerar nome filho	
if ($num_filho > 0) {
	$nome_filho = array();
	for ($i=0; $i < $num_filho; $i++) { 
		$a = 1;
		$total_nomes = rand(2,4);
		$meu_filho = '';
		while ($a <= $total_nomes) {
			$rand_keys = array_rand($sobrenomes, $total_nomes);
			$filho = $sobrenomes[$rand_keys[0]];
			$a++;
			$meu_filho.= ' '.$filho;
		}
		array_push($nome_filho,$meu_filho);
	}
	echo $nome_filho = implode(', ', $nome_filho);
}else{
	echo $nome_filho = 'Não possui';
}
	
echo '</br>Comungante: ';
//gerar comunga	
$comunga = rand(0, 1);
echo $comunga;

if ($comunga === 1) {
	//gerar data_batismo
	$timestamp = mt_rand(1, time());
	$data_batismo = date("Y-m-d", $timestamp);
} else {
	$data_batismo = '0000-00-00';
}
echo '</br>Data do Batismo: '.$data_batismo;
	
echo '</br>Tipo de Admição: ';
//gerar tipo admição
$tipo_admissao = rand(1, 5);
echo $tipo_admissao;

echo '</br>Funcao Ministerial: ';
//gerar funcao_ministerio
$funcao_ministerio = rand(1, 5);
echo $funcao_ministerio;


echo '</br>Nome da Antiga Igreja: ';
//gerar nome igreja
if ($tipo_admissao === 4) {
	
	$igreja_anterior ;
} else {
	$igreja_anterior = 'Não possui';
	echo $igreja_anterior;
}

	

	/*$arquivo_nome = "./upload/img/member-photo/".$nome;
	$cad_membro = "INSERT INTO `members`(`first_name`, `second_name`, `path_image`, `name_father`, `name_mother`, `marital_status`, `conjuge_name`, `sex`, `schooling`, `status_schooling`, `son`, `amount_son`, `name_son`, `comungante`, `baptism_date`, `type_admission`, `id_select_ministerial_function`, `previous_church`, `identity_card`, `identity_emitter`, `state_emitter`, `date_expedition`, `id_select_city_of_birth`, `date_birth`, `c_p_f`, `cep`, `street`, `number_house`, `complement`, `neighborhood`, `uf_cep`, `city_cep`, `telephone`, `cellphone`, `email`, `status`, `date_register`) VALUES ('$nome','$sobrenome','$arquivo_nome','$nomePai','$nomeMae','$estado_civil','$conjuge','$sexo','$escolaridade','$escolaridade_status','$filho','$num_filho','$nome_filho','$comunga','$data_batismo','$tipo_admissao','$funcao_ministerio','$igreja_anterior','".$dados['rg']."','".$dados['rg_orgao']."','".$dados['rg_estado']."','".$dados['rg_expedicao']."','".$dados['cidade_nasc']."','".$dados['data_nascimento']."','".$dados['cpf']."','".$dados['cep']."','".$dados['rua']."','".$dados['numero']."','".$dados['complemento']."','".$dados['bairro']."','".$dados['uf_cep']."','".$dados['cidade']."','".$dados['telefone']."','".$dados['celular']."','".$dados['email']."','1',NOW())";
/*
		$resultado_usuario = mysqli_query($conn, $cad_membro);


	if (mysqli_insert_id($conn)) {
		echo 1;//deu certo
	} else {
		echo 0;//deu errado
	}
*/

?>