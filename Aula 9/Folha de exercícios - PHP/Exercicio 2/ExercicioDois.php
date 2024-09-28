<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Valor divisível por 2</h1>
<?php
/*
Crie um programa para testar se um número é divisível por 2.
Caso for verdade escrever a frase “Valor divisível por 2”
Caso for falso escrever a frase “O valor não é divisível por 2” 
*/
function isValorDivisivel($valor) {
    if ($valor % 2 == 0) {
        return true;
    }
    else {
        return false;
    }
}

#Programa principal

$valor = 42;

echo "<p>" . $valor . "<p>";

if (isValorDivisivel($valor)) {
    echo "Este valor é divisível por 2";
}
else {
    echo "O valor não é divisível por 2";
}

?>
</body>
</html>