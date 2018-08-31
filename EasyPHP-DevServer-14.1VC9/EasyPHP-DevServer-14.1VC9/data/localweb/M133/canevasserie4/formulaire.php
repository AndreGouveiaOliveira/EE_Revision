<?php
/*
 * Module 133, Série  Exercice 4.3
 * Description : Formulaire HTML présentant une série de champs de saisie
 * Auteur : Pascal Comminot
 * Version 1.0 / PC / 27.2.18 / Canevas de l'exercice
 */

require_once 'formselements.php';

$currentAnimal = filter_input(INPUT_POST, 'animal', FILTER_SANITIZE_STRING);
$currentColor = filter_input(INPUT_POST, 'radio', FILTER_SANITIZE_STRING);
$pseudo = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$commentaire = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING);
$motdepasse = filter_input(INPUT_POST, 'motdepasse', FILTER_SANITIZE_STRING);
$datenaisance = filter_input(INPUT_POST, 'datenaissance', FILTER_SANITIZE_STRING);

$animaux = array(
    null => 'Choisissez un animal de compagnie',
    'cat' => 'Chat',
    'dog' => 'Chien',
    'snake' => 'Serpent',
    'mouse' => 'Souris',
    'mogwai' => 'Mogwaï'
);

$couleur = array(
    'rouge' => 'Rouge',
    'vert' => 'Vert',
    'bleu' => 'Bleu',
    'jaune' => 'Jaune',
    'autre' => 'Autre'
);

$pays = array(
    'suisse' => 'Suisse',
    'france' => 'France',
    'allemagne' => 'Allemagne',
    'espagne' => 'Espagne',
    'portugal' => 'Portugal'
);

$couleurArray = array();
$paysArray = array();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>M133 Série 4 Exercice 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="<?php
        if (file_exists("repondeur.php")) {
            echo "repondeur.php";
        } else {
            echo "formulaire.php";
        }
        ?>" method="post">
            <table>
                <tr>
                    <td><label for="pseudo">Pseudo</label></td>
                    <td><input type="text" name="pseudo" id="pseudo" value="<?= $pseudo ?>"></td>
                </tr>
                <tr>
                    <td><label for="motdepasse">Mot de passe</label></td>
                    <td><input type="password" name="motdepasse" id="motdepasse" value="<?= $motdepasse ?>"></td>
                </tr>
                <tr>
                    <td><label for="datenaissance">Date de naissance</label></td>
                    <td><input type="date" name="datenaissance" id="datenaissance" value="<?= $datenaisance ?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email" value="<?= $email ?>"></td>
                </tr>
                <tr>
                    <td><label for="commentaire">Commentaire</label></td>
                    <td><textarea name="commentaire" id="commentaire"><?= $commentaire ?></textarea></td>
                </tr>
                <tr>
                    <td>Couleur préférée</td>
                    <td>
                        <!--
                        <label><input type="radio" name="couleur" value="rouge">Rouge</label><br>
                        <label><input type="radio" name="couleur" value="vert">Vert </label><br>
                        <label><input type="radio" name="couleur" value="bleu">Bleu </label><br>
                        <label><input type="radio" name="couleur" value="jaune">Jaune</label><br>
                        <label><input type="radio" name="couleur" value="autre">Autre</label>
                        -->

                        <?php
                        $couleurArray = radioButton('radio', $couleur, $currentColor);
                        for ($index = 0; $index < count($couleur); $index++) {
                            echo $couleurArray[$index];
                            echo "<br>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="animal">Animal de compagnie</label></td>
                    <td>
                        <?php echo select('animal', 'animal', $animaux, $currentAnimal) ?>
                    </td>
                </tr>
                <tr>
                    <td>Nationalité(s)</td>
                    <td>
                        <label><input type="checkbox" name="nationalite[]" value='ch'>Suisse</label><br>
                        <label><input type="checkbox" name="nationalite[]" value='fr'>France</label><br>
                        <label><input type="checkbox" name="nationalite[]" value='de'>Allemagne</label><br>
                        <label><input type="checkbox" name="nationalite[]" value='es'>Espagne</label><br>
                        <label><input type="checkbox" name="nationalite[]" value='pt'>Portugal</label></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="secret" value="Que j'aime à faire connaître ce nombre utile aux sages"></td>
                    <td><input type="submit" name="Soumettre" value="Envoyer"></td>
                </tr>
            </table>          
        </form>
    </body>
</html>
