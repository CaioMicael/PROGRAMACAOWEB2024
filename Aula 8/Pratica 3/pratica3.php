<?php

$salario1 = 1000;
$salario2 = 2000;

$salario2 = $salario1;

$salario2++;

$salario1 += ($salario1*10)/100;

/*
$salario1 = 1000;
$salario2 = 1200;
*/

if ($salario1 > $salario2) {
    echo "O valor de $salario1 é maior que $salario2";
}
else {
    if ($salario2 > $salario1) {
        echo "O valor de $salario2 é maior que $salario1";
    } 
    else {
        echo "Os valores são iguais";
    }
}

?>
