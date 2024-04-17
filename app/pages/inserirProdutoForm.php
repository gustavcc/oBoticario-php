<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir | oBoticario</title>
    <link rel="icon" href="../../public/img/sla.png">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/base.css">
    <!-- <script src="../../public/js/inserir.js" defer></script> -->
</head>
<body>
    <?php
    require_once("cabecalhoAdmin.php");
    ?>

    <form action="../actions/inserirProduto.php" method="POST" enctype="multipart/form-data">
        <?php
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }  
        ?>
        <div class="box">
            <label for="imagem">Selecione uma imagem:</label>
            <input id="imagem_file" type="file" name="imagem" accept="image/*" >
            <!-- <p>Ou</p>
            <label for="imagem">Link da imagem:</label>
            <input id="imagem_link" type="text" name="imagem" > -->
        </div>
        <div class="box">
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text">
        </div>
        <div class="box">
            <label for="descricao">Descrição:</label>
            <input id="descricao" name="descricao" type="text">
        </div>
        <div class="box">
            <label for="preco">Preço:</label>
            <input id="preco" name="preco" type="text">
        </div>
        <input type="submit" value='Enviar'>
    </form>
    
</body>
</html>