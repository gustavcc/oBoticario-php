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
    

    $nome = $_POST['nome'];
    $imagem = $_FILES["imagem"];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $arquivoType = explode('.',$imagem['name']);

    if (($arquivoType[sizeof($arquivoType)-1] == 'jpeg') || ($arquivoType[sizeof($arquivoType)-1] == 'png') || ($arquivoType[sizeof($arquivoType)-1] == 'jpg')){
        $imagemBin = file_get_contents($imagem['tmp_name']);

        move_uploaded_file($imagem['tmp_name'],'../../public/products/'.$imagem['name']);

        conecta();

        $sql = "INSERT INTO produto(imagem,nome,descricao,preco)VALUES(?,?,?,?);";

        $stmt = $mysqli->prepare($sql);
        if(!$stmt){
            die("Erro ao inserir.Problema no acesso ao banco de dados");
        }
        $stmt->bind_param("bsss",$imagemBin,$nome,$descricao,$preco);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            $msg = "Produto cadastrado com sucesso.";
        }else{
            $msg = "Não foi possível inserir.";
        }

        desconecta();
    } else {
        $msg = $arquivoType[sizeof($arquivoType)-1];
    }
}

header("Location: ../pages/inserirProdutoForm.php?msg={$msg}");