<?php

$disciplina = array("Banco de Dados II" , "Estrutura de Dados I" , "Administração Sistemas de Informação" , "Engenharia de Software II" , "Programação Web I");
$profe      = array("Marco Butzke" , "Fernando Bastos" , "Sandro Alencar" , "Jullian Hermann" , "Cleber Nardelli");

for ($i = 0 ; $i < count($disciplina) ; $i++) {
    echo "Disciplina $disciplina[$i] , professor $profe[$i] <br>";
}

?>
