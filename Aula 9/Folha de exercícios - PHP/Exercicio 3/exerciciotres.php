<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Área de um quadrado</h1>
<?php
/*
Crie um programa que calcule a área de um quadrado. Você deve configurar uma
variável que representa o comprimento dos lados de um quadrado em metros. Após o
cálculo escrever uma frase com o resultado da operação, exemplo: “A área do
quadrado de lado 3 metros é 9 metros quadrados”
*/

function CalculaAreaQuadrado($ladoQuadrado) {
    $areaQuadrado = $ladoQuadrado ** 2;
    return $areaQuadrado;
}

#Programa principal
$ladoQuadrado = 7;

$area = CalculaAreaQuadrado($ladoQuadrado);
echo "A área do quadrado de lado de ". $ladoQuadrado . " metros é ". $area . " metros quadrados.";

?>
</body>
</html>