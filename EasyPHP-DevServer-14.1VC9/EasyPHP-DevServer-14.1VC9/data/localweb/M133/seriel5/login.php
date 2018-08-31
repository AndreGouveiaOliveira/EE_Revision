<?php
// Module 133 règlement 2014, série 5, Site protégé
// Description : petite application pour protéger des pages
//
// Auteur : gouveia de oliveira André
// Version 1.0 / Vos initiales / 3.10.2016 / Codage initial
// Page d'identification : si l'utilisateur n'est pas identifié, propose un
// formulaire d'identification, sinon, signale à l'utilisateur qu'il est déjà identifié


/**
 * vérifie si le pseudo et le mot de passe fournis sont valides
 * @param string $pseudo 
 * @param string $pwd
 * @return boolean vrai si le pseudo et le mot de passe concordent, faux sinon.
 */
session_start();
$pseudo = filter_input(INPUT_POST, "pseudo");
$pwd = filter_input(INPUT_POST, "pwd");
if (!isset($_SESSION["utilisateur"])) {
    $_SESSION["utilisateur"] = "";
    $_SESSION["motdepasse"] = "";
}

if ($pseudo == NULL || $pseudo == FALSE) {
    $pseudo = $_SESSION["utilisateur"];
} else {
    $_SESSION["utilisateur"] = $pseudo;
}

if ($pwd == NULL || $pwd == FALSE) {
    $pwd = $_SESSION["motdepasse"];
} else {
    $_SESSION["motdepasse"] = $pwd;
}

function checkIdentification($pseudo, $pwd) {

    $identifications = array(
        'marie' => '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', // 1234
        'paul' => '2abd55e001c524cb2cf6300a89ca6366848a77d5', // 5678 
        'alfred' => '8c829ee6a1ac6ffdbcf8bc0ad72b73795fff34e8'  // qwertz
    );

    if (isset($identifications[$pseudo])) {
        if ($identifications[$pseudo] == sha1($pwd)) {
            return true;
        }
    }
    return false;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Site protégé - Identification</title>
        <!-- La feuille de styles "base.css" doit être appelée en premier. -->
        <link rel="stylesheet" type="text/css" href="modele03_fichiers/base.css" media="all" />
        <link rel="stylesheet" type="text/css" href="modele03_fichiers/modele03.css" media="screen" /> 
    </head>

    <body>

        <div id="global">

            <header>
                <h1>
                    <img alt="" src="modele03_fichiers/03.png" />
                    Site protégé
                </h1>
                <p class="sous-titre">
                    <strong>M133</strong>
                    Série 8
                </p>


            </header>

            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="login.php">Identification</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                    <li><a href="page1.php">Page 1</a></li>
                    <li><a href="page2.php">Page 2</a></li>
                </ul>
            </nav>

            <section>
                <?php
                // Message à afficher si le pseudo ou le mot de passe est erroné
                if (!checkIdentification($pseudo, $pwd)) {
                    ?>
                <h2>Identification</h2>
                <?php 
                // Formulaire à afficher si l'utilisateur n'est pas identifié
                
                ?>
                <p class="erreur">Identification ou mot de passe erroné</p>
                    <form action="login.php" method="post" type="hidden">
                        <table>
                            <tr>
                                <td><label for="pseudo" >Pseudo</label></td>
                                <td><input type="text" name="pseudo" id="pseudo" value="" /></td>
                            </tr>
                            <tr>
                                <td> <label for="pwd">Mot de passe</label></td>
                                <td><input type="password" name="pwd" id="pwd" value="" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="XXXX" value="Connexion" /></td>
                            </tr>
                        </table>
                    </form>
                    <?php } else {
                // Texte à afficher si l'utilisateur est identifié     
                    ?>
                <h2>Bonjour, <?= $pseudo ?></h2>
                <p>Vous êtes déjà identifié, vous désirez peut-être vous <a href="logout.php">déconnecter</a> ?</p>
                <?php }
                ?> 
            </section>

            <footer>
                <p id="copyright">
                    Mise en page © 2008
                    <a href="http://www.elephorm.com/">Elephorm</a> et
                    <a href="http://www.alsacreations.com/">Alsacréations</a><br />
                    Modèle de gabarit <a href="http://www.alsacreations.com/static/gabarits/modele03.html">Gabarit 3</a>


                </p>
            </footer><!-- #pied -->

        </div><!-- #global -->


    </body>
</html>