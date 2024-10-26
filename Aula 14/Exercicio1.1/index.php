<?php 

require_once 'ClassCalculadora.php';

$calculadora = new Calculadora;

$calculadora -> setOperador1(50);
$calculadora -> setOperador2(5);

//$calculadora -> somar();
$calculadora -> subtrair();

?>