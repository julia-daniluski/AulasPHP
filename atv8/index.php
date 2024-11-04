<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresso Bruno Mars</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulário para compra</h1>
    <p>Nome:</p>
    <form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
    <p>Idade:</p>
        <input type="text" name="idade" placeholder="Digite sua idade" required>
        <p>Ingresso:</p>
        <input type="text" placeholder="Tipo de ingresso" list="tipo">
  <datalist id="ingresso">
    <option value="">tipo de ingresso:</option>
    <option value="VIP">Ingresso VIP</option>
    <option value="Regular">Ingresso regular</option>
    <option value="Basico">Ingresso básico</option>
  </datalist>
        <button type="submit">Enviar</button>
    </form>

    <?php
$ingresso = "POST"; 
switch ($ingresso) {
    case 1:
        $preco = 100,00;
        $tipoingresso = "VIP";
        break;
    case 2:
        $preco = 50,00;
        $tipoingresso = "Regular";
        break;
    case 3:
        $preco = 20,00;
        $tipoingresso = "Básico";
        break;
    default:
        echo "Opção inválida.";
}

echo "<p>Você escolheu: $tipoingresso</p>";
echo "Preço : " . number_format($preco, 2,',');

?>
</body>
</html>
