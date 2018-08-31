<?php
/*
  Module 133, série 3, exercice 1
  Description : transformations de chaines de caractères
  Auteur : André Gouveia de Oliveira
  Version 0.9 / PC / 5.9.08 / canevas de l'exercice
 */

// si on a reçu un chaine, on récupère cette chaîne et on la convertit dans les divers formats demandés

$chaine = filter_input(INPUT_GET, 'chaine');

if ($chaine !== NULL || $chaine !== FALSE) {
    $tableau = array(
        "normal" => $chaine,
        "majuscule" => strtoupper($chaine),
        "minuscule" => strtolower($chaine),
        "lettreMajuscule" => ucfirst($chaine),
        "lettreMotMajuscule" => ucwords($chaine),
        "sansBalise" => strip_tags($chaine),
        "baliseNeutralisee" => $chaine,
        "inversionCaractere" => strrev($chaine),
        "inversionMot" => implode(array_reverse(explode(" ",$chaine))),
        );
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Transformations</title>
    </head>
    <body>
        <p>
        <form method="get" action="traitements.php">
            <input type="text" name="chaine" value="<?php echo $chaine ?>" >
            <input type="submit" value="envoyer" >
        </form>
    </p>
    <?php
    // si on a reçu quelquechose, on affiche les résultats:
        ?>
        <hr>
        <ol>
            <li>Tel quel: <?= $tableau['normal']?></li>
            <li>En majuscule: <?= $tableau['majuscule']?></li>
            <li>En minuscule: <?= $tableau['minuscule']?></li>
            <li>Première lettre en majuscule: <?= $tableau['lettreMajuscule']?></li>
            <li>1ère lettre de chaque mot en majuscule: <?= $tableau['lettreMotMajuscule']?></li>
            <li>Sans d'éventuelles balises: <?= $tableau['sansBalise']?></li>
            <li>Les balises neutralisées: <?= $tableau['baliseNeutralisee']?></li>
            <li>Inversion de tous les caractères: <?= $tableau['inversionCaractere']?></li>
            <li>Inversion mot à mot: <?= $tableau['inversionMot']?></li>
        </ol>
        <?php
        // fin du si
    ?>
</body>
</html>
