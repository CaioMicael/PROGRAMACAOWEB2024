<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="styleExercicioSeis.css">
</head>
<body>
    <h1>Árvore recursiva</h1>
<?php
/*
Dado o Array abaixo, pede-se para recursivamente criar a árvore ao lado:
- bsn
-- 3a fase
--- desenvWeb
--- bancoDados 1
--- engSoft 1
-- 4a Fase
--- Intro Web
--- bancoDados 2
--- engSoft 2
*/

function imprimirArvore($array, $nivel = 0) {
    foreach ($array as $chave => $valor) {
        if (is_array($valor)) {
            echo str_repeat('--', $nivel) . " " . $chave . "<br>";
            imprimirArvore($valor, $nivel + 1);
        } else {
            echo str_repeat('-', $nivel + 1) . " " . $valor . "<br>";
        }
    }
};

// O array dado na questão
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb", 
            "bancoDados 1", 
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web", 
            "bancoDados 2", 
            "engSoft 2"
        )
    )
        );

#Programa principal
imprimirArvore($pastas);
?>
</body>
</html>