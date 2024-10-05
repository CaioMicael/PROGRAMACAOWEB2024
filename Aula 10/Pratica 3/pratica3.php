<?php
/*
Criar um novo programa em PHP, obtendo dados do mesmo
formulário HTML utilizado no Lab 2;

Porém neste caso iremos gravar os dados em arquivo
diretamente no disco.

Salvar os dados no formato JSON.

Gravar 10 pessoas no arquivo.
*/


if (file_exists("dados.txt")) {
    echo file_get_contents("dados.txt");
}

$arquivo = file_get_contents("dados.txt");

file_put_contents("dados2.txt" , serialize($arquivo));

?>
