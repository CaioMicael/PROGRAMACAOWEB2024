<?php

require_once 'ClassTime.php';
require_once 'ClassJogador.php';

$time = new time;

$time -> setNome('Unidavi FC');

$time -> setAnoFundacao(1997);

$jogador = new jogador;

$jogador -> setNome('Pelé');
$jogador -> setPosicao('Meia');
$jogador -> setDataNascimento('01/01/2000');

$time -> addJogadores($jogador);

echo '<pre>';
print_r($time -> getJogadores());
echo '</pre>';

?>