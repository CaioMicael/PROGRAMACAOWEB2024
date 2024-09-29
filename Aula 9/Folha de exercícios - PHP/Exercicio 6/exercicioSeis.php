<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="styleExercicioSeis.css">
</head>
<body>
    <h1>Cálculo saldo de compras</h1>
<?php
/*
Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras.
Ele comprou maçã, melancia, laranja, repolho, cenoura, batatinha.

Crie um programa que calcule o valor gasto com cada produto comprado, sendo o
resultado do valor individual do produto em Kg multiplicado pela quantidade em Kg
comprada por Joãozinho.

Ao final escrever uma frase com o valor da compra, e uma previsão se o dinheiro será
o suficiente para pagar a conta, caso falte dinheiro escrever uma frase em vermelho
com o valor que ficou acima do disponível por Joãozinho, e não, escrever uma fase em
azul e o valor que Joãozinho ainda poderia gastar.

Caso o valor da compra seja exatamente igual ao R$ 50,00 disponível, escreva uma
frase em verde afirmando que o saldo para compras foi esgotado.
*/
$valorPorKg = [
    "Maca"     => 2.58,
    "Melancia" => 9.63,
    "Laranja"  => 2.75,
    "Repolho"  => 1.50,
    "Cenoura"  => 0.50,
    "Batata"   => 2.00
];

$qtdeComprada = [
    "Maca"     => 0.500,
    "Melancia" => 4.500,
    "Laranja"  => 0.400,
    "Repolho"  => 0.100,
    "Cenoura"  => 0.250,
    "Batata"   => 2.000
];

$saldoJoaozinho = 50;
$valorTotalCompra = 0;

function calculaValorTotalGasto($aValorPorKg , $aQtdeComprada) {
    return ($aValorPorKg * $aQtdeComprada);
}

function calculaValorPorKg($aValorPorKg , $aQtdeComprada) {
    return array_map('calculaValorTotalGasto' , $aValorPorKg , $aQtdeComprada); 
}

function somaTotalCompra($valorTotalCompra , $aValorTotalCompra) {
    foreach ($aValorTotalCompra as $valores) {
        $valorTotalCompra += $valores;
    }
    return $valorTotalCompra;
}

function calculaValorDiferencaSaldo($saldoJoaozinho , $valorTotalCompra) {
    return $saldoJoaozinho - $valorTotalCompra;
}

function escreveResultadoCompra($diferencaGastoSaldo , $saldoJoaozinho , $valorTotalCompra) {
    if ($diferencaGastoSaldo == 0) {
        echo "<p id=verde>A compra deu um total de R$". $valorTotalCompra ." e o saldo de Joãozinho é R$". $saldoJoaozinho ." logo a compra foi feita com sucesso.";
    }
    else if ($diferencaGastoSaldo < 0) {
        echo "<p id=vermelho>A compra deu um total de R$". $valorTotalCompra ." e o saldo de Joãozinho é R$". $saldoJoaozinho ." logo faltou um total de R$". $diferencaGastoSaldo *-1 . " para completar a compra.";
    }
    else {
        echo "<p id=azul>A compra deu um total de R$". $valorTotalCompra ." e o saldo de Joãozinho é R$". $saldoJoaozinho ." logo sobrou um total de R$". $diferencaGastoSaldo ." para Joãozinho.";
    }
}

#Programa principal

$aValorTotalCompra = calculaValorPorKg($valorPorKg , $qtdeComprada);

$valorTotalCompra = somaTotalCompra($valorTotalCompra , $aValorTotalCompra);

$diferencaGastoSaldo = calculaValorDiferencaSaldo($saldoJoaozinho , $valorTotalCompra);

escreveResultadoCompra($diferencaGastoSaldo , $saldoJoaozinho , $valorTotalCompra);
?>
</body>
</html>