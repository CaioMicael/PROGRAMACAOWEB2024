<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8 - Prática 6</title>
</head>
<body>
    <h1>Prática 6 da aula 8</h1>
    
    <?php
        $tabela = array(
                        array("Matemática"      , 5 , 8.5),
                        array("Português"       , 2 ,   9),
                        array("Geografia"       , 10,   6),
                        array("Educação Física" , 2 ,   8));

        
        echo "<table>" . "<thead>" . "<th>Dispiplina</th>" . "<th>Faltas</th>" . "<th>Média</th>" . "</thead>" ."<tbody>";
        foreach ($tabela as $disciplinas) {
            echo"<tr>";
            foreach($disciplinas as $valor) {
                echo "<td>$valor</td>";
            }
            echo"</tr>";
        }
        echo "</tbody>" . "</table>";

    ?>


</body>
</html>