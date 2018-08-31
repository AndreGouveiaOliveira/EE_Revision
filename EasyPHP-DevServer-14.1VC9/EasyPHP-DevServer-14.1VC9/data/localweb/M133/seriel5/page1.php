<?php
// Module 133 règlement 2014, série 5, Site protégé
// Description : petite application pour protéger des pages
//
// Auteur : Votre nom
// Version 1.0 / Vos initiales / 18.12.2015 / Codage initial
// Page protégée : si l'utilisateur n'est pas identifié, il est redirigé vers
//   la page de login, sinon cette page est affichée
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Site protégé - Page protégée</title>
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
            </nav><!-- #navigation -->

            <section>
                <h2>Extrait du "Petit maltraité des termes intrigants"</h2>
                <p><em>(c) 2003 J-C Armici</em></p>
                <dl>
                    <dt>Accélérateur</dt>
                    <dd>concentré à base de puces, socles et potentiomètres permettant à des ordinateurs démodés de retrouver, pendant quelques semaines, une nouvelle et dernière jeunesse. Ce genre de dopage coûte souvent plus cher qu'un ordinateur dernier cri, avec turbo et jantes en alliage léger.</dd>
                    <dt>Accès</dt>
                    <dd>il existe plusieurs types d'accès. L'accès direct, c'est le téléphone. L'accès séquentiel, c'est la tournée du facteur. L'accès direct en mémoire, c'est la mise sur table d'écoute téléphonique. L'accès multiple n'a d'équivalent que chez certaines concierges en mal de dialogue.</dd>
                    <dt>Accumulateur</dt>
                    <dd>organe d'un ordinateur qu'il faut vider assez souvent pour éviter qu'il ne déborde.</dd>
                    <dt>Accusé de réception</dt>
                    <dd>en anglais "acknowledgment". Généralement ce sont les postes de radio et de télévision qui sont accusés de réception.</dd>
                    <dt>ACIA</dt>
                    <dd>arbre fruitier constitué, pour l'essentiel, par une série de puces.</dd>
                    <dt>ACM</dt>
                    <dd>"Association for Computing Mistery".</dd>
                    <dt>Acné</dt>
                    <dd>maladie des claviers qui se traduit par l'apparition de boutons de plus en plus nombreux et persistants.</dd>
                    <dt>Acquisition de données</dt>
                    <dd>expression résumant toute l'incohérence informatique. Pourquoi faudrait-il acquérir ce qui est donné ?</dd>
                    <dt>Acronyme</dt>
                    <dd>mot d'orthographe douteuse, inconnu du dictionnaire. S'utilise par opposition à acropole pour désigner une grande arène où se déroulent les courses de bits.</dd>
                    <dt>Activation</dt>
                    <dd>l'activation se fait par l'envoi d'interruptions, ou de données, dont l'arrivée au processus déclenche l'initialisation de son programme d'exécution. En d'autres termes: opération qui marque le début d'une longue suite d'événements.</dd>
                </dl>        
            </section><!-- #contenu -->

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