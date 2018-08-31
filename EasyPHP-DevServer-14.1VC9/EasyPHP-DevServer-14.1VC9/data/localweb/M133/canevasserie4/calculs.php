<?php
/**
 * Fichier : calculs.php
 * Projet : série d'exercie N° 2, M133, série 4
 * Description : vérification du bon fonctionnement des fonctions PGCD et 
 *   PPCM définies dans math.php
 */

require_once 'math.php';

$NombreA = !empty($_GET['NombreA']) ? $_GET['NombreA'] : 1;
$NombreB = !empty($_GET['NombreB']) ? $_GET['NombreB'] : 1;

if (isset($_GET['calculer']))
{
    // $ppcm = ...
    // $pgcd = ...
    
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calcul du PGCD et du PPCM</title>
    </head>
    <body>
        <h1>Calcul du PPCM et du PGCD de deux nombres</h1>
        <form method="get" action="">
            <input type="text" name="NombreA" value="<?php echo $NombreA ?>" /><br />
            <input type="text" name="NombreB" value="<?php echo $NombreB ?>" /><br />
            <input type="submit" name="calculer" value="Calculer" />
        </form>
        <hr/>
        <?php
          if (isset($_GET['calculer']))
          {
            echo "Le PGCD de $NombreA et $NombreB est $pgcd<br />";
            echo "Le PPCM de $NombreA et $NombreB est $ppcm<br />";
          }
         ?>
    </body>
</html>
