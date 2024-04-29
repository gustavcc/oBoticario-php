<?php

require_once('../config/conecta.php');

$msg;

if (!is_numeric($_GET['id'])){
    die("não foi possível excluir");
}
conecta();

$id = $_GET["id"];
$sql = "DELETE FROM tabela WHERE
id=?";

$stmt = $conn->prepare($sql);

if (!$stmt){
    die('erro ao inserir');
}

$stmt->bind_param("i",$id);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    $msg = "pessoa excluida fom sucesso";
} else {
    $msg = "não foi possível excluir";
}

desconecta();

header("Location:endereco_web?msg={$msg}");