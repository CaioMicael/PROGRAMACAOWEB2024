<?php
/*
Criar um novo programa em PHP, obtendo dados do mesmo
formulário HTML utilizado no Lab 2;

Porém neste caso iremos gravar os dados em arquivo
diretamente no disco.

Salvar os dados no formato JSON.

Gravar 10 pessoas no arquivo.
*/

$aDados = array (
    'campo_primeiro_nome' => $_POST['campo_primeiro_nome'],
    'campo_sobrenome' => $_POST['campo_sobrenome'],
    'campo_email' => $_POST['campo_email'],
    'campo_cidade' => $_POST['campo_cidade'],
    'campo_estado' => $_POST['campo_estado'],
    'campo_password' => $_POST['campo_password']
);


if (file_exists("dadosPessoa.json")) {
    $aDadosExistentes = array(file_get_contents("dadosPessoa.json"));
    print_r($aDadosExistentes) ;
    print_r($aDados);
    $aDadosInsercao = $aDados + $aDadosExistentes;
    file_put_contents("dadosPessoa.json" , json_encode($aDadosInsercao));
}
else {
    file_put_contents("dadosPessoa.json" , json_encode($aDados));
}
?>
