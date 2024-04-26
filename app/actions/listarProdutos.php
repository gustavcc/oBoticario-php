
<?php

require_once("../config/conecta.php");

conecta();

$sql = "SELECT id_produto, path_img, nome, descricao, preco  FROM produto;";

$result = $mysqli->query($sql);

if($result->num_rows > 0){

    $listaProdutos = $result->fetch_all(MYSQLI_ASSOC);
}

desconecta();

?>
