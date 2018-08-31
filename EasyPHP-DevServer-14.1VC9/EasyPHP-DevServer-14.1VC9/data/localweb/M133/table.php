<?php
/*
  Auteur : Gouveia de Oliveira, André, I.DA-?2C
  Projet : Série 2.2, table de multiplications
  Fichier : table
  Description : Faire une table de multiplication
  Version : 23.01.2018 / AGO / V 1
 */
$multiplicateur = filter_input(INPUT_POST, "multiplicateur", FILTER_VALIDATE_INT);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Petits Calculs</title>
        <style type="text/css">
            table, tr, td, th{
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <form method="post" action="">
            Multiplicateur : <br>
            <input type="text" name="multiplicateur"><br>
            <input type="submit"><br>
            <table>
                <?php
                echo "<table>";
                for ($h = 0; $h <= $multiplicateur; $h++) {
                    if ($h == 0) {
                        echo "<th>*</th>";
                    } else {
                        echo "<th>$h</th>";
                    }
                }
                for ($i = 1; $i <= $multiplicateur; $i++) {
                    echo "<tr>";
                    echo "<td><b>" . $i . "</b></td>";
                    for ($j = 1; $j <= $multiplicateur; $j++) {
                        echo "<td>" . $i * $j . "</td>";
                    }
                }
                echo "</table>"
                ?>
            </table>
        </form>
    </body>
</html>
