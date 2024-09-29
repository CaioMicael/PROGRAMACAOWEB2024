<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="styleExercicioSeis.css">
</head>
<body>
    <h1>Cálculo juros compostos</h1>
<?php
/*
Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas
pena que ele não sabia da mesma chance que Paulinho.
A empresa que Juquinha foi comprar a moto utiliza juros compostos para calcular o
valor das parcelas.

As opções de compras estudadas por ele são as mesmas de Paulinho, ou seja 24, 36,
48 e 60 vezes o juro nesta empresa inicia em 2% para 24 vezes e aumenta 0,3% para
as opções de parcelamento seguintes.
Utilizando então a fórmula de juros composto que segue abaixo, calcule o valor da
parcela para cada uma das opções a ser estudada por Juquinha.
M = C * (1 + i)t , onde:
M = Montante
C = Capital Inicial
i = Taxa de juros
t = Tempo
*/

$valorMoto = 8654.00;
$taxaJuros = 2;

$qtdeParcelas = [
    24,
    36,
    48,
    60
];

function calculaJurosCompostos($valorMoto , $taxaJuros , $qtdeParcelas) {
    foreach ($qtdeParcelas as $parcelas) {
        $juros[] = ($valorMoto * (1 + $taxaJuros /100) ** $parcelas);
        $taxaJuros += 0.3;
    }
    return $juros;
}

function calculaValorPorParcela($qtdeParcelas , $valorTotal) {
    for ($i = 0 ; $i < 4 ; $i++) {
        $valorParcela[] = $valorTotal[$i] / $qtdeParcelas[$i];
    }
    return $valorParcela;
}

#Programa principal

$valorTotal = calculaJurosCompostos($valorMoto , $taxaJuros , $qtdeParcelas);

$valorParcela = calculaValorPorParcela($qtdeParcelas , $valorTotal);

for ($i = 0 ; $i < 4 ; $i++) {
    echo "O financiamento em ". $qtdeParcelas[$i] . " vezes dará R$". number_format($valorTotal[$i],2) . " , resultando em R$". number_format($valorParcela[$i],2) ." por parcela. <br>";
}

?>
</body>
</html>