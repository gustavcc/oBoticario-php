<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar | oBoticario</title>
    <link rel="icon" href="../../public/img/sla.png">
    <link rel="stylesheet" href="../../public/css/admin.css">
    <script src="../../public/js/inserir.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    require_once("cabecalhoAdmin.php");
    require_once("../actions/listarProdutos.php");
    ?>
    <main>
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
                    echo "<tr><td>$id</td><td>{$nome}</td><td><img src='data:image/jpeg;base64,<?= base64_encode({$imagem}) ?>'/></td><td>{$descricao}</td><td>{$preco}</td><td><a href='editProduto.php?produto={$id}'>Edit</a></td><td><a href='../actions/excluirProduto.php?produto={$id}'>Delete</a></td></tr>";
                }
                echo "</table>";
            }
        ?>
    </main>
</body>
</html>