<?php
/*
  Module 133, série 3, exercice 4
  Description : comptage de caractères
  Auteur : Gouveia de Oliveira André
  Version 0.9 / PC / 27.9.11 / canevas de l'exercice
 */

// si on a reçu un chaine, on récupère cette chaîne et on la traite
$chaine = filter_input(INPUT_GET, 'chaine');
if (!empty($chaine)) {
    $comptes = array();
    $tableau = preg_split('//u', $chaine, -1, PREG_SPLIT_NO_EMPTY);
    foreach ($tableau as $c) {
        if (isset($comptes[$c])) {
            $comptes[$c] ++;
        } else {
            $comptes[$c] = 1;
        }
    }
    ksort($comptes);
}
else
    $chaine = '';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Comptes</title>
        <style type="text/css">
            td, th {
                border: 1px grey solid;
                min-width : 50px;
                text-align : center;
            }
            table { border-collapse: collapse;}
        </style>
    </head>
    <body>
        <h1>Comptage des caractères</h1>
        <p>
        <form method="get" action="">
            <textarea name="chaine" cols="60" rows="5"></textarea><br />
            <input type="submit" value="envoyer">
        </form>
    </p>
    <?php
    // si on traité quelque chose, le résultat s'affiche ici
    for ($i = 0; $i < count($tableau); $i++) {
        
    }
    ?>
    <table>
        <tr>
            <th>H</th>
            <td>1</td>
        </tr>
    </table>
    <?php
    // fin du si
    ?>
</body>
</html>
