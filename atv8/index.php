<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresso Dame Tu Cosita</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
</head>
<body>
    <header class="menu">
        <img src="img/icon.png" alt="Ícone do evento">
        <h1>INGRESSOS SHOW DAME TU COSITA</h1>
    </header>
    
    <main>
        <form method="POST">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            </div>
            
            <div>
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade" placeholder="Digite sua idade" required min="0">
            </div>
            
            <div class="dropdown">
                <label>Escolha seu Ingresso:</label>
                <button type="button" class="dropdownbtn">INGRESSO</button>
                <div class="dropdown-content">
                    <a href="#" data-value="VIP" data-preco="200">VIP - R$200</a>
                    <a href="#" data-value="Regular" data-preco="50">Regular - R$50</a>
                    <a href="#" data-value="Básico" data-preco="20">Básico - R$20</a>
                </div>
            </div>
            <input type="hidden" name="tipo_ingresso" id="tipo_ingresso">
            <input type="hidden" name="preco_ingresso" id="preco_ingresso">
            <p id="valor-ingresso"></p>

            <button type="submit">Enviar</button>
        </form>
    </main>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = htmlspecialchars($_POST['nome']);
        $idade = (int)$_POST['idade']; 
        $tipoIngresso = htmlspecialchars($_POST['tipo_ingresso']);
        $precoIngresso = htmlspecialchars($_POST['preco_ingresso']);

        if ($idade < 18) { 
            echo "<p>Desculpe, você precisa ter 18 anos ou mais para comprar um ingresso.</p>";
        } else {
            echo "<p>Obrigado, $nome! Sua compra de um ingresso $tipoIngresso no valor de R$$precoIngresso foi realizada com sucesso.</p>";
        }
    }
    ?>

    <script>
        const dropdownBtn = document.querySelector('.dropdownbtn');
        const dropdownContent = document.querySelector('.dropdown-content');
        const tipoIngressoInput = document.getElementById('tipo_ingresso');
        const precoIngressoInput = document.getElementById('preco_ingresso');
        const valorIngressoText = document.getElementById('valor-ingresso');

        dropdownBtn.onclick = function() {
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        };

        dropdownContent.querySelectorAll('a').forEach(item => {
            item.onclick = function(event) {
                event.preventDefault();
                const value = this.getAttribute('data-value');
                const preco = this.getAttribute('data-preco');
                tipoIngressoInput.value = value;
                precoIngressoInput.value = preco;
                valorIngressoText.textContent = `Você escolheu o ingresso ${value} - R$${preco}`;
                dropdownContent.style.display = 'none';
            };
        });

        window.onclick = function(event) {
            if (!event.target.matches('.dropdownbtn')) {
                dropdownContent.style.display = 'none';
            }
        };
    </script>
</body>
</html>
