<?php
$bebida = 3; 
switch ($bebida) {
    case 1:
        $preco = 2.50;
        $nomebebida = "Água";
        break;
    case 2:
        $preco = 3.50;
        $nomebebida = "Suco";
        break;
    case 3:
        $preco = 4.00;
        $nomebebida = "Refrigerante";
        break;
    default:
        echo "Opção inválida.";
}

echo "<p>Você escolheu: $nomebebida</p>";
echo "Preço : " . number_format($preco, 2,',');

?>
