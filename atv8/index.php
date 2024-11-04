<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresso Bruno Mars</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulário para Compra</h1>
    <form method="POST">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
        </div>
        
        <div>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" placeholder="Digite sua idade" required>
        </div>
        
        <div class="dropdown">
            <label>Escolha seu Ingresso:</label>
            <button type="button" class="dropdownbtn" required>Selecionar</button>
            <div class="dropdown-content">
                <a href="#" data-value="VIP">VIP</a>
                <a href="#" data-value="Regular">Regular</a>
                <a href="#" data-value="Básico">Básico</a>
            </div>
        </div>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = htmlspecialchars($_POST['nome']);
        $idade = (int)$_POST['idade']; 
        
        if ($idade < 18) { 
            echo "<p>Desculpe, você precisa ter 18 anos ou mais para comprar um ingresso.</p>";
        } else {
            echo "<p>Obrigado, $nome! Sua compra foi realizada com sucesso.</p>";
        }
    }
    ?>
    
    <script>
        const dropdownBtn = document.querySelector('.dropdownbtn');
        const dropdownContent = document.querySelector('.dropdown-content');

        dropdownBtn.onclick = function() {
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        };

        // Fechar o dropdown se o usuário clicar fora
        window.onclick = function(event) {
            if (!event.target.matches('.dropdownbtn')) {
                dropdownContent.style.display = 'none';
            }
        };
    </script>
</body>
</html>
