<!DOCTYPE html>
<!--
* Auteur : Gouveia de OLiveira André
* Title : EE_Revision
* Date : 30.08.2018
* Version : 1.0.0
* Description : C'est un site d'échange d'information
-->
<?php
require_once 'functions.php';

if (!empty($_SESSION["login"])) {
    header("Location: main.php");
    exit();
}

if (filter_has_var(INPUT_POST, 'submit')) {
    $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);
    $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_STRING);
    if (!empty($login) || !empty($pwd)) {
        $result = checkUser($login, $pwd);
        if (empty($result)) {
            $error = "";
        } else {
            $_SESSION["name"] = userInformation($login)["name"];
            $_SESSION["surname"] = userInformation($login)["surname"];
            $_SESSION["idUser"] = userInformation($login)["idUser"];
            $_SESSION["login"] = $login;
            //echo $_SESSION["name"] . " " . $_SESSION["surname"];
            header("Location: main.php");
            exit();
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
                <legend>Connection</legend>
                <div>Identifiant:</div>
                <input type="text" id="login" name="login" value="<?php if (empty($login)) {echo "";} else { echo $login;} ?>">
                <div>Mot de passe:</div>
                <input type="password" id="pwd" name="pwd" value=""><br>
                <input type="submit" name="submit">
            </fieldset>
        </form>
        <a href="inscription.php">Pas encore inscrit?</a>
    </body>
</html>
