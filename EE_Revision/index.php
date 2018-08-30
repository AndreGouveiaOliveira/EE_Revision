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

if (filter_has_var(INPUT_POST, 'submit')) {
    $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_STRING);
    $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_STRING);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        require_once 'connection.php';
        ?>
    </body>
</html>
