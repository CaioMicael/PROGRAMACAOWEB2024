<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
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
    "Maca"     => 2.50,
    "Melancia" => 12.50,
    "Laranja"  => 2.75,
    "Repolho"  => 1.50,
    "Cenoura"  => 0.50,
    "Batata"   => 2.00
];


$saldoJoaozinho = 50;
$valorTotalCompra = 0;

$qtdeComprada = [
    "Maca"     => 0.500,
    "Melancia" => 4.500,
    "Laranja"  => 0.400,
    "Repolho"  => 0.100,
    "Cenoura"  => 0.250,
    "Batata"   => 2.000
];


function calculaValorTotalGasto($aValorPorKg , $aQtdeComprada) {
    return ($aValorPorKg * $aQtdeComprada);
}

function calculaValorPorKg($aValorPorKg , $aQtdeComprada) {
    return array_map('calculaValorTotalGasto' , $aValorPorKg , $aQtdeComprada); 
}

#Programa principal

$valorTotalCompra = calculaValorPorKg($valorPorKg , $qtdeComprada);
echo $valorTotalCompra;
?>
</body>
</html>