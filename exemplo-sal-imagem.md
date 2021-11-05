Acho mais recomendável salvar o caminho da imagem no banco, eu faria dessa forma:

<?php
include_once 'conexao.php';

$nome = $_POST['NomeAluno'];

$idade = $_POST['IdadeAluno'];

$foto = $_FILES['image']['tmp_name'];

$tamanho_permitido = 1024000; //1 MB
$pasta = 'uploads';

if (!empty($foto)){
    $file = getimagesize($foto);

    //TESTA O TAMANHO DO ARQUIVO
    if($_FILES['image']['size'] > $tamanho_permitido){
        echo "erro - arquivo muito grande";
        exit();
    }

    //TESTA A EXTENSÃO DO ARQUIVO
    if(!preg_match('/^image\/(?:gif|jpg|jpeg|png)$/i', $file['mime'])){
        echo "erro - extensão não permitida";
        exit();
    }

    //CAPTURA A EXTENSÃO DO ARQUIVO
    $extensao = str_ireplace("/", "", strchr($file['mime'], "/"));

    //MONTA O CAMINHO DO NOVO DESTINO
    $novoDestino = "{$pasta}/foto_arquivo_".uniqid('', true) . '.' . $extensao;  
    move_uploaded_file ($foto , $novoDestino );

} 


$sql = "INSERT INTO contatos (nome, idade, foto) values ('$nome', '$idade', $novoDestino";

echo $sql;
?>