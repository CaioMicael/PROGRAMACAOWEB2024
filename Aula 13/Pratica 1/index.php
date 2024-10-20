<?php
require_once "ClassPessoa.php";

$pessoa = new pessoa;
$pessoa -> setNome("Caio");
$pessoa -> setSobrenome("Micael");
$pessoa -> setDataNascimento("19/04/2004");
$pessoa -> setCpfCnpj("001002004242");
$pessoa -> setTipo(1);
$pessoa -> getTelefone() -> setTipo(1);
$pessoa -> getTelefone() -> setNome("celular");
$pessoa -> getTelefone() -> setValor("47-992881826");
$pessoa -> getEndereco() -> setLogradouro("rua");
$pessoa -> getEndereco() -> setBairro("boa vista");
$pessoa -> getEndereco() -> setCidade("Rio do Sul");
$pessoa -> getEndereco() -> setEstado("SC");
$pessoa -> getEndereco() -> setCep("89180-220");

var_dump($pessoa);
?>