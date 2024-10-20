<?php
require_once "ClassPessoa.php";

$pessoa = new pessoa;
file_put_contents("pessoa.json",$pessoa);
file_put_contents("contato.json",$pessoa -> getTelefone());
file_put_contents("endereco.json", $pessoa -> getEndereco());

?>