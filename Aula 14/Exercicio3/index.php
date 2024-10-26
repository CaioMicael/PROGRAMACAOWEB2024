<?php

require_once 'ClassUsuario.php';
require_once 'ClassSession.php';

if (!isset($session)) {
    $session = new session;
}
$usuario_caio -> setUserName('CaioMicael');
$usuario_caio -> setUserLogin(1234);
$usuario_caio -> setUserPass('senha123');

?>