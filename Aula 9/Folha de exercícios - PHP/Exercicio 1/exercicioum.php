<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="styleExercicioUm.css">
</head>
<body>
    <h1>Soma total dos valores</h1>
<?php
/*
Criar um programa que execute a soma de três valores.
Se a primeira variável for maior que 10, escrever o resultado da operação em azul
Se a segunda variável for menor que a terceira, escrever o resultado em verde
Se a terceira variável for menor que a primeira e a segunda variável escrever o
resultado em vermelho 
*/
function executaSoma($iPrimeiroValor , $iSegundoValor , $iTerceiroValor) {
    $somaTotal = $iPrimeiroValor + $iSegundoValor + $iTerceiroValor;
    return $somaTotal;
}

function escreveResultadoByCor($somaTotal , $primeiraVariavel , $segundaVariavel , $terceiraVariavel) {
    if ($primeiraVariavel > 10) {
        echo "<p id=azul>". $somaTotal . "</p>";
    }
    else if ($segundaVariavel < $terceiraVariavel) {
        echo "<p id=verde>". $somaTotal . "</p>";
    }
    else if (($terceiraVariavel < $primeiraVariavel) && ($terceiraVariavel < $segundaVariavel)) {
        echo "<p id=vermelho>". $somaTotal . "</p>";
    }
    else {
        echo "<p>" . $somaTotal . "</p>";
    }
}

#Programa principal
$primeiraVariavel = 2;
$segundaVariavel  = 5;
$terceiraVariavel = 6;

echo "Valores a serem somados: ". $primeiraVariavel . " , " . $segundaVariavel . " , " . $terceiraVariavel;

$somaTotal = executaSoma($primeiraVariavel, $segundaVariavel, $terceiraVariavel);
escreveResultadoByCor($somaTotal , $primeiraVariavel , $segundaVariavel , $terceiraVariavel);


?>
</body>
</html>