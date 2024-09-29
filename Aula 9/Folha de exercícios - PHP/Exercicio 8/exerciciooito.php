<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="styleExercicioSeis.css">
</head>
<body>
    <h1>Cálculo juros simples</h1>
<?php
/*
Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois
utiliza Juros Simples para o cálculo das parcelas.
Sabendo então que o valor a vista do moto é R$ 8.654,00.

Crie um programa que calcule o valor das parcelas para as opções abaixo, sabendo que
a taxa de juros aumenta 0,5% em cada nível e inicia em 1,5% para 24 vezes:
24 vezes
36 vezes
48 vezes
60 vezes
*/

$valorMoto = 8654.00;
$taxaJuros = 1.5;

$qtdeParcelas = [
    24,
    36,
    48,
    60
];

function calculaJurosSimples($valorMoto , $taxaJuros , $qtdeParcelas) {
    foreach ($qtdeParcelas as $parcelas) {
        $juros[] = ($valorMoto * $taxaJuros * $parcelas) /100;
        $taxaJuros += 0.5;
    }
    return $juros;
}

function calculaValorTotalFinanciamento($juros , $valorMoto) {
    foreach ($juros as $j) {
        $valor[] = $valorMoto + $j;
    }
    return $valor;
}

function calculaValorPorParcela($qtdeParcelas , $valorTotal) {
    for ($i = 0 ; $i < 4 ; $i++) {
        $valorParcela[] = $valorTotal[$i] / $qtdeParcelas[$i];
    }
    return $valorParcela;
}

#Programa principal

$juros = calculaJurosSimples($valorMoto , $taxaJuros , $qtdeParcelas);

$valorTotal = calculaValorTotalFinanciamento($juros , $valorMoto);

$valorParcela = calculaValorPorParcela($qtdeParcelas , $valorTotal);

for ($i = 0 ; $i < 4 ; $i++) {
    echo "O financiamento em ". $qtdeParcelas[$i] . " vezes dará R$". $valorTotal[$i] . " , resultando em R$". number_format($valorParcela[$i],2) ." por parcela. <br>";
}

?>
</body>
</html>