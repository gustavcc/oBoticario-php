<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir | oBoticario</title>
    <link rel="icon" href="../../public/img/sla.png">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/base.css">
    <script src="../../public/js/inserir.js" defer></script>
</head>
<body>
    <?php
    require_once("cabecalho.php");
    ?>

    <form action="../actions/inserirProduto.php" method="POST">

        <label for="imagem">Selecione uma imagem</label>
        <input id="imagem" onchange="readerFile(this.files)" type="file" name="imagem" accept="image/*" >
    </form>
    
</body>
</html>