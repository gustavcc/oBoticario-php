<?php

require_once("../config/conecta.php");

$msg;

if(!isset($_FILES['imagem']) && $_FILES['imagem']['error'] != 0){
    $msg = "Selecione uma imagem";
}elseif(empty($_POST['nome'])){
    $msg = "Preencha o nome";
}elseif(empty($_POST['descricao'])){
    $msg = "Preencha o campo descrição";
}elseif(empty($_POST['preco'])){
    $msg = "Preencha o campo preço";

}else{

    // Verifica se o arquivo é uma imagem
    $mime_type = mime_content_type($_FILES["imagem"]["tmp_name"]);
    if (substr($mime_type, 0, 5) !== 'image') {
        echo "O arquivo enviado não é uma imagem válida.";
        exit;
    }

    $nome = $_POST['nome'];
    $imagemConteudo = fopen($_FILES["imagem"]["tmp_name"], 'rb');
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    conecta();

    $sql = "INSERT INTO produto(imagem,nome,descricao,preco)VALUES(?,?,?,?);";

    $stmt = $mysqli->prepare($sql);

    if(!$stmt){
        die("Erro ao inserir.Problema no acesso ao banco de dados");
    }

    $stmt->bind_param("bsss",$imagemConteudo,$nome,$descricao,$preco);
    $stmt->execute();

    fclose($imagemConteudo);

    if($stmt->affected_rows > 0){
        $msg = "Produto cadastrado com sucesso.";
    }else{
        $msg = "Não foi possível inserir.";
    }

    desconecta();
}

header("Location: ../pages/inserirProdutoForm.php?msg={$msg}");