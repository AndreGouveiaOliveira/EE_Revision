<?php
/**
 * Fichier : nombres.php
 * Projet : série d'exercie N° 4, M133, exercice 1
 * Description : vérification du bon fonctionnement des fonctions mathématiques
 * definies dans math.php 
 * 
 * Mettez éventuellement en commentaires les lignes qui concernant les fonctions 
 * que vous n'avez pas encore réalisée, mais sinon pas d'autre modification dans
 * ce fichier
 */
require_once 'math.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fonctions sur les nombres</title>
        <style type="text/css">
            table, td, th {
                border-width:1px;
                border-color: green greenyellow greenyellow green;
                border-style: solid;
            }
            td {
                text-align: right;
            }
        </style>

    </head>
    <body>
        <h1>Vérification du bon fonctionnement des fonctions</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Pair</th>
                <th>Premier</th>
                <th>Conversion en base 2</th>
                <th>Conversion en base 16</th>
                <th>Conversion en base 36</th>
                <th>Shadok</th>
            </tr>
            <?php for ($n = 2; $n<=100; $n++) : ?>

            <tr>
                <td><?= $n ?></td>
                <td><?= OuiNon(EstPair($n)) ?></td>
                <td><?= OuiNon(EstPremier($n)) ?></td>
                <td><?= DecToBase($n, 2) ?></td>
                <td><?= DecToBase($n, 16) ?></td>
                <td><?= DecToBase($n, 36) ?></td>
                <td><?= DecToShadok($n) ?></td>
            </tr>

            <?php endfor; ?>

        </table>
    </body>
</html>
