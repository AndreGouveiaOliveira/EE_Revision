<?php 
/*
Auteur : Nom, Prénom, Classe
Projet : Série 1, petits calculs simples
Fichier : calculs
Description : Montrer les effets de la combinaison de variables de divers type avec différents opérateurs
Version : Date / initiale de l'auteur / description des modifications
*/
// Initialisation des variables
    $i = 5; $j = 2; $k = 3; 
    $x = 24.2; 
    $r = 'Bonjour ';
    $s = '11 élèves';
    $t = 'Pi vaut 3.1415926'; 
    $reussi = true;
    $rate = false;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Petits Calculs</title>
    </head>
    <body>
        <p>$i =<?php echo $i ?></p>
        <p>$j =<?php echo $j ?></p>
        <p>$k = <?php echo $k ?></p>
        <p>$x = <?php echo $x ?></p>
        <p>$r = <?php echo $r ?></p>
        <p>$s = <?php echo $s ?></p>
        <p>$t = <?php echo $t ?></p>
        <p>$reussi = <?php echo $reussi ?></p>
        <p>$rate = <?php echo $rate ?></p>
        <hr>
        <p>$i + $j = <?php echo $i + $j; ?></p>
        <p>$j / $k = <?php echo $j / $k; ?></p>
        <p>$i - $j = <?php echo $i - $j; ?></p>
        <p>$i % $j = <?php echo $i % $j; ?></p>
        <p>$x - $i = <?php echo $x - $i; ?></p>
        <p>$i + $s = <?php echo $i + $s; ?></p>
        <p>$t + $j = <?php echo $t + $j; ?></p>
        <p>concaténer $r $s = <?php echo $r . $s; ?></p>
    </body>
</html>
