<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <h1>Área de um retângulo</h1>
<?php
/*
Crie um programa que calcule a área de um retângulo. Você deve configurar duas
variáveis que representam os lados a e b desse quadrado em metros. Após o cálculo
escrever uma frase com o resultado da operação, exemplo: “A área do retângulo de
lados 3 e 2 metros é 6 metros quadrados.” Caso a área for maior que 10 escreva a frase
usando a tag h1, se não, escrever com h3.
*/

function CalculaAreaRetangulo($H , $B) {
    $areaRetangulo = $H * $B;
    return $areaRetangulo;
}

function escreveArea($area , $ladoH , $ladoB) {
    if ($area > 10) {
        echo "<h1> A área do retângulo de lados de ". $ladoH . " e ". $ladoB . " metros é ". $area . " metros quadrados.</h1>";
    }
    else {
        echo "<h3> A área do retângulo de lados de ". $ladoH . " e ". $ladoB . " metros é ". $area . " metros quadrados.</h3>";
    }
}

#Programa principal
$ladoH = 3;
$ladoB = 7;

$area = CalculaAreaRetangulo($ladoH, $ladoB);
escreveArea($area , $ladoH , $ladoB);

?>
</body>
</html>