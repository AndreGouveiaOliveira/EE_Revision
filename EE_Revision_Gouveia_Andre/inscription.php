<?php
/**
 * Auteur : Gouveia de OLiveira André
 * Title : EE_Revision
 * Date : 30.08.2018
 * Version : 1.0.0
 * Description : C'est un site d'échange d'information
 */
require_once 'functions.php';

if (!empty($_SESSION["login"])) {
    header("Location: main.php");
    exit();
}

if (filter_has_var(INPUT_POST, 'submit')) {
    $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_STRING);
    $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_STRING);
    $validationPwd = filter_input(INPUT_POST, "validationPwd", FILTER_SANITIZE_STRING);

    if ($pwd === $validationPwd) {
        if (!empty($login) && !empty($name) && !empty($surname) && !empty($pwd) && !empty($validationPwd)) {
            if (pseudoExist($login) == NULL) {
                createUser($surname, $name, $login, $pwd);
                header("Location: index.php");
                exit();
            } else {
                echo "<h3>L'utilisateur est deja utiliser</h3>";
            }
        }
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <legend>Inscription</legend>
                <div>Prénom:</div>
                <input type="text" id="surname" name="surname" value="<?php if (empty($surname)) {echo "";} else { echo $surname;} ?>">
                <div>Nom:</div>
                <input type="text" id="name" name="name" value="<?php if (empty($name)) {echo "";} else { echo $name;} ?>">
                <div>Identifiant:</div>
                <input type="text" id="login" name="login" value="<?php if (empty($login)) {echo "";} else { echo $login;} ?>">
                <div>Mot de passe:</div>
                <input type="password" id="pwd" name="pwd" value="">
                <div>Validation du mot de passe:</div>
                <input type="password" id="validationPwd" name="validationPwd" value=""><br>
                <input type="submit" name="submit" value="Valider" >
            </fieldset>
        </form>
        <a href="index.php">Retour sur connection</a>
    </body>
</html>