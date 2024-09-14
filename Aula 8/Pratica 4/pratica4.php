<?php

$salario1 = 1000;
$salario2 = 2000;

$salario2 = $salario1;

$salario2++;

$salario1 += ($salario1*10)/100;

for ($i = 0 ; $i < 100 ; $i++) {
    $salario1++;
    if ($i == 49) {
        break;
    }
}

if ($salario1 < $salario2) {
    echo $salario1;
}

?>