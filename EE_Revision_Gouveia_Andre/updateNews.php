<!DOCTYPE html>
<!--
* Auteur : Gouveia de OLiveira André
* Title : EE_Revision
* Date : 30.08.2018
* Version : 1.0.0
* Description : C'est un site d'échange d'information
-->
<?php
include_once 'functions.php';

if (empty($_SESSION["login"])) {
    header("Location: index.php");
    exit();
}

if (filter_has_var(INPUT_POST, 'modify')) {
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING);
    if (!empty($title)||!empty($description)) {
        updatePost($idNews, $title, $description);
    }
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <legend>Données du post</legend>
                <div>Titre:</div>
                <input type="text" id="title" name="title" value="<?= $_GET["title"]?>">
                <div>Description:</div>
                <input type="text" id="description" name="description" value="<?= $_GET["description"]?>"><br>
                <input type="submit" name="Modify" value="Modifier">
            </fieldset>
            <a href="main.php">Retour</a>
        </form>
    </body>
</html>
