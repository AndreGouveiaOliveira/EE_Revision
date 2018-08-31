<?php
/*
 * Projet : Récupération des données d'un formulaire, Série 2, Exercice 3
 * Fichier : Affichage des données reçues
 * Version : 1.0 / PC / 2.9.2015 / Codage initial
 *
 * NE MODIFIEZ PAS CE SCRIPT, mais utilisez le en tant que cible de votre formulaire
 *
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>M133 Série 2 Exercice 4</title>
    </head>
    <body>
        <h1>Répondeur</h1>
        <?php
        if (count($_POST) > 0):
            ?>
            <h2>Voici les données reçues avec la méthode POST</h2>
            <table>
                <?php foreach ($_POST as $param => $valeur): ?>
                    <tr>
                        <td><?php echo $param ?></td>
                        <td>
                            <?php
                            if (is_array($valeur)) :
                                echo implode(", ", $valeur);
                            else:
                                echo $valeur;
                            endif;
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?php
        endif;
        ?>
            <hr>
        <?php
        if (count($_GET) > 0):
            ?>
            <h2>Voici les données reçues avec la méthode GET</h2>
            <table>
                <?php foreach ($_GET as $param => $valeur): ?>
                    <tr>
                        <td><?php echo $param ?></td>
                        <td>
                            <?php
                            if (is_array($valeur)) :
                                echo implode(", ", $valeur);
                            else:
                                echo $valeur;
                            endif;
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?php
        endif;
        ?>
            
    </body>
</html>
