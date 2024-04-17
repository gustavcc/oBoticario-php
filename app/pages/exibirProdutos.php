<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar | oBoticario</title>
    <link rel="icon" href="../../public/img/sla.png">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/base.css">
    <!-- <script src="../../public/js/inserir.js" defer></script> -->
</head>
<body>
    <?php
    require_once("cabecalhoAdmin.php");
    require_once("../actions/listarProdutos.php");
    ?>
    <main>
    <a href="editProduto.php?id_produto={$id_produto}">Edit</a>

    <h1>Lista de pessoas</h1>

    <?php
        if(!isset($listaProdutos)){
            echo "Nenhum registro encontrado.";
        }else{
            echo "<table border='1px'>" . "<tr><th>ID</th><th>Nome</th><th>Imagem</th><th>Descrição</th><th>Preço</th><th>Editar</th><th>Excluir</th></tr>";
            foreach($listaProdutos as $produto){
                $nome = $produto['nome'];
                $id = $produto['id_produto'];
                $imagem = $produto['imagem'];
                $descricao = $produto['descricao'];
                $preco = $produto['preco'];
                echo "<tr><td>$id</td><td>{$nome}</td><td>{$imagem}</td><td>{$descricao}</td><td>{$preco}</td><td>Edit</td><td>Delete</td></tr>";
            }
            echo "</table>";
        }
    ?>

    </main>
</body>
</html>