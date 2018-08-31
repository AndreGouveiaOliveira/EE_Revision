<?php
// Module 133 règlement 2014, série 5, Site protégé
// Description : petite application pour protéger des pages
//
// Auteur : Votre nom
// Version 1.0 / Vos initiales / 18.12.2015 / Codage initial

// Page de déconnexion : déconnecte l'utilisateur du site

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Site protégé - Déconnexion</title>
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
                <h2>Au revoir</h2>
                <p>Vous êtes maintenant déconnecté. Merci pour votre vsite</p>
            </section><!-- #contenu -->

            <footer>
                <p id="copyright">
                    Mise en page © 2008
                    <a href="http://www.elephorm.com/">Elephorm</a> et
                    <a href="http://www.alsacreations.com/">Alsacréations</a><br />
                    Modèle de gabarit <a href="http://www.alsacreations.com/static/gabarits/modele03.html">Gabarit 3</a>


                </p>
            </footer>

        </div><!-- #global -->
    </body></html>