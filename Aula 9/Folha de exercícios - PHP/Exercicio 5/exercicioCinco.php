<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Área de um triângulo retângulo</h1>
<?php
/*
Crie um programa que calcule a área de um triângulo retângulo, cuja fórmula segue
abaixo. Crie as variáveis apropriadas para o cálculo em PHP e por fim exiba uma frase
com o valor da operação. 
Fórmula -> Resultado = (Base * Altura) / 2
*/

function CalculaAreaTrianguloRetangulo($base , $altura) {
    $areaTrianguloRetangulo = ($base * $altura) / 2;
    return $areaTrianguloRetangulo;
}

function escreveArea($area , $base , $altura) {
    echo "<p> A área do triângulo retângulo de base de ". $base . " e altura de ". $altura . " metros é ". $area . " metros.</p>";
}

#Programa principal
$base = 3;
$altura = 7;

$area = CalculaAreaTrianguloRetangulo($base, $altura);
escreveArea($area , $base , $altura);

?>
</body>
</html>