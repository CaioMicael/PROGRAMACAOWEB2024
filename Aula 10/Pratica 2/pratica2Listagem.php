<?php
$info_con = "host= localhost port = 5432 dbname= avaliacao user= postgres password= postgres";

$dados = array( '%' . $_POST['campo_primeiro_nome'] . '%');

$con = pg_connect($info_con);

$result = pg_query_params($con,"SELECT * FROM TBPESSOA WHERE PESNOME ILIKE $1",$dados);

while($pessoa = pg_fetch_assoc($result)) {
    foreach($pessoa as $r) {
        echo $r . "<br>";
    }
}





?>