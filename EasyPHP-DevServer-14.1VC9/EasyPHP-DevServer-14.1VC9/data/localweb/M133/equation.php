<?php
/*
 * Module 133, série 2, exercice 6
 * Résolution d'une équation du deuxième degré
 * Auteur : André Gouveia de Oliveira
 * Version : 0.9 / PC / 1.10.2007 / Maquette HTML de l'exercice
 */

// récupération des paramètres
$a = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_STRING);
$b = filter_input(INPUT_GET, 'b', FILTER_SANITIZE_STRING);
$c = filter_input(INPUT_GET, 'c', FILTER_SANITIZE_STRING);
// traitement si des données ont été reçues
if (($a !== NULL || $a !== FALSE) && ($b !== NULL || $b !== FALSE) && ($c !== NULL || $c !== FALSE)) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                $solution = "Toute valeur de x est solution";
            } else {
                $solution = "Acune solution";
            }
        } else {
            $x = -$c / $b;
            $solution = "x = $x";
        }
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            $solution = "Aucune solution";
        } else {
            if ($delta == 0) {
                $x = -$b / (2*$a);
                $solution = "Une solution: x = ".$x."";
            } else {
                $x1 = (-$b + sqrt($delta))/(2*$a);
                $x2 = (-$b - sqrt($delta))/(2*$a);
            $solution = "2 solutions <br>"
                    . "x1 = $x1 <br>"
                    . "x2 = $x2";
            }
        }
    }
}
// Au terme du traitement, $solution contient une réponse formatée 
// (aucune solution, 1 solution, 2 solutions ou infinité de solution)
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>Calcul des solution d'une équation du 2ème degré</title>
    </head>
    <body>
        <h1>Résolution d'une équation du 2ème degré</h1>
        <p>Soit l'équation <b>ax<sup>2</sup> + bx + c = 0</b>. Ce script calcule
            les valeurs possibles pour x.</p>
        <form method="get" action="">
            <table>
                <tr>
                    <td>a</td>
                    <td><input type="text" name="a" size="20" value="<?php echo $a ?>" /></td>
                </tr>
                <tr>
                    <td>b</td>
                    <td><input type="text" name="b" size="20" value="<?php echo $b ?>" /></td>
                </tr>
                <tr>
                    <td>c</td>
                    <td><input type="text" name="c" size="20" value="<?php echo $c ?>" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="calculer" value="Résoudre" /></td>
                </tr>
            </table>
        </form>
        <hr />
        <?php
        if (isset($solution)) {
            echo $solution;
        }
        ?>
    </body>

</html>