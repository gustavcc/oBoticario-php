<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir | oBoticario</title>
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
    ?>
    <main>
        <form action="../actions/inserirProduto.php" method="POST" enctype="multipart/form-data">
            <?php
            if(isset($_GET['msg'])){
                echo "<p class='msg'>{$_GET['msg']}</p>";
            }  
            ?>
            <div class="box">
                <label>Selecione uma imagem:</label>
                <input id="imagem_file" type="file" name="imagem" accept="image/">
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
    </main> 
</body>
</html>