<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <link rel="stylesheet" href="styleExercicioSeis.css">
</head>
<body>
    <h1>Cálculo financiamento</h1>
<?php
/*
Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como
ela não tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que
ficou em 60 parcelas de R$ 489,65.

Escreva um programa que calcule o valor gasto só dos juros que serão pagos por
Mariazinha em comparação ao valor a vista do carro.
*/

$valorCarro                = 22500.00;
$valorParcelaFinanciamento = 489.65;
$totalParcelas             = 60;

function calculaValorJuros($valorCarro , $valorParcelaFinanciamento , $totalParcelas) {
    return ($valorParcelaFinanciamento * $totalParcelas) - $valorCarro;
}

#Programa principal

$valorJuros = calculaValorJuros($valorCarro , $valorParcelaFinanciamento , $totalParcelas);

echo "Mariazinha irá pagar um total de R$". $valorJuros . " em juros.";

?>
</body>
</html>