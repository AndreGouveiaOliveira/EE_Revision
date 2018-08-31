<?php
/*
 * Fichier : Serie 2, exercice 4, hello.php
 * Description : 
 * Auteur : André Gouveia de Oliveira
 * Version : 0.9 / 30.01.2018 / Maquette HTML de l'exercice, à compléter
 *
 */

// Récupération des éventuelles données
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Hello World, Exercice 2.2</title>
    </head>
    <body>
        <h1>Hello World</h1>
        <?php
        // s'il n'y pas de donnée ou elles sont vides, cela veut dire qu'il n'y a pas 
        // eu de traitement de données, et qu'il faut afficher le formulaire
        if (($nom == NULL) || ($age == NULL)) {
            ?>
            <h2>Quel est ton nom ?</h2>
            <form method="post" action="">
                <table>
                    <tr>
                        <td><label for="nom">nom</label></td>
                        <td><input type="text" id="nom" name="nom"></td>
                    </tr>
                    <tr>
                        <td><label for="age">âge</label></td>
                        <td><input type="text" id="age" name="age"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
 else {
// Sinon, les données ont été traitées, on peut les afficher.
        echo '<p>Age : '.$age.'</p>';
        echo '<p>Nom : '.$nom.'</p>';
 }
        ?>
    </body>
</html>
