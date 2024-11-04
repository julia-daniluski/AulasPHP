<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pode dirigir?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Digite seu nome</h2>
    <form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
    <h1>Digite sua idade</h1>
        <input type="text" name="idade" placeholder="Digite sua idade" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_POST['nome']) && isset($_POST['idade'])) {
        $nome = $_POST['nome'];
        $idade = (int)$_POST['idade']; 
        if ($idade < 18) { 
            echo "<p>$nome, você tem $idade anos e, pela lei, só é permitido dirigir a partir dos 18. </p>";
        } 
            else {
            echo "<p>$nome, você tem $idade anos e, pela lei, já tem a idade permitidade para dirigir.  </p>";
        }
    }
    ?>
    
</body>
</html>
