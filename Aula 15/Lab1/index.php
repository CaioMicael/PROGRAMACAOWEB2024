<?php

require_once "lib/estClassConexaoBD.php";
require_once "lib/estClassQuery.php";

$bd = new estClassConexaoBD();

if (!$bd -> conectaDB()) {
    echo "erro de conexão";
}
else {
    echo "conectado com sucesso";
    $query = new estClassQuery($bd);
    $query->setSql("SELECT * FROM tbavaliacao limit 1");
    if ($query->Open()) {
        if ($query->getQuantidadeLinhas() > 0) {
            while($linha = $query->getNextRow()) {
                var_dump($linha);
            }
        }
        else {
            echo "Nenhum registro encontrado";
        }
    }

}

?>