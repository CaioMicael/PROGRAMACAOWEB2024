<?php
require_once "ClassPessoa.php";

$caio = new pessoa;
$caio -> setNome("Caio");
$caio -> setSobrenome("Micael");
$caio -> setDataNascimento("19/04/2004");
$caio -> setCpfCnpj("001002004242");
$caio -> setTipo(1);
$caio -> getTelefone() -> setTipo(1);
$caio -> getTelefone() -> setNome("celular");
$caio -> getTelefone() -> setValor("47-992881826");
$caio -> getEndereco() -> setLogradouro("rua");
$caio -> getEndereco() -> setBairro("boa vista");
$caio -> getEndereco() -> setCidade("Rio do Sul");
$caio -> getEndereco() -> setEstado("SC");
$caio -> getEndereco() -> setCep("89180-220");

$CaioPai = new pessoa;
$CaioPai -> setNome("Alan");
$CaioPai -> setSobrenome("Krieger");
$CaioPai -> setDataNascimento("03/05/1986");
$CaioPai -> setCpfCnpj("001002004242");
$CaioPai -> setTipo(1);
$CaioPai -> getTelefone() -> setTipo(1);
$CaioPai -> getTelefone() -> setNome("celular");
$CaioPai -> getTelefone() -> setValor("47-992881826");
$CaioPai -> getEndereco() -> setLogradouro("rua");
$CaioPai -> getEndereco() -> setBairro("boa vista");
$CaioPai -> getEndereco() -> setCidade("Rio do Sul");
$CaioPai -> getEndereco() -> setEstado("SC");
$CaioPai -> getEndereco() -> setCep("89180-220");

$CaioMae = new pessoa;
$CaioMae -> setNome("Ana");
$CaioMae -> setSobrenome("Krieger");
$CaioMae -> setDataNascimento("08/09/1988");
$CaioMae -> setCpfCnpj("001002004242");
$CaioMae -> setTipo(1);
$CaioMae -> getTelefone() -> setTipo(1);
$CaioMae -> getTelefone() -> setNome("celular");
$CaioMae -> getTelefone() -> setValor("47-992881826");
$CaioMae -> getEndereco() -> setLogradouro("rua");
$CaioMae -> getEndereco() -> setBairro("boa vista");
$CaioMae -> getEndereco() -> setCidade("Rio do Sul");
$CaioMae -> getEndereco() -> setEstado("SC");
$CaioMae -> getEndereco() -> setCep("89180-220");

$aPessoa = array($caio,$CaioPai,$CaioMae);
file_put_contents('pessoas.txt',$aPessoa);
?>