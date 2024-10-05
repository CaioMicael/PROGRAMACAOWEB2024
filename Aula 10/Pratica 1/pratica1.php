<?php
$info_con = "host= localhost port = 5432 dbname= avaliacao user= postgres password= postgres";

if ($info_con) {
    $aDados = array (
        $_POST['campo_primeiro_nome'],
        $_POST['campo_sobrenome'],
        $_POST['campo_email'],
        $_POST['campo_cidade'],
        $_POST['campo_estado'],
        $_POST['campo_password']
    );

    $con = pg_connect($info_con);

    $query = pg_query_params($con, "INSERT INTO TBPESSOA (PESNOME,PESSOBRENOME,PESEMAIL,PESCIDADE,PESESTADO,PESPASSWORD) VALUES ($1, $2, $3, $4, $5, $6)",$aDados);

    if ($query) {
        echo "Dados inseridos. <br>";
    }
    else {
        echo "Ocorreu uma exceção interna do sistema.";
    }

    $result = pg_query($con,"SELECT * FROM TBPESSOA");

    while($pessoa = pg_fetch_assoc($result)) {
        foreach($pessoa as $r) {
            echo $r . "<br>";
        }
    }

    var_dump($result);
}


?>