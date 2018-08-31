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
        <title>Site protégé - page protégée</title>
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
                    <dt>ADA</dt>
                    <dd>(en français:  "Ah! Oui ?") Nouveau langage formé presque uniquement par des instructions interrogatives.</dd>
                    <dt>Adaptateur de ligne</dt>
                    <dd>appareil très sophistiqué permettant aux pêcheurs d'utiliser aussi bien du fil à haute qu'à basse impédance.</dd>
                    <dt>Additionneur</dt>
                    <dd>circuit électronique effectuant l'addition binaire (remplaçable par n'importe quelle personne ayant subi l'école primaire). L'amoncellement d'additionneurs dans un ordinateur peut battre n'importe quel amas de neurones.</dd>
                    <dt>ADI</dt>
                    <dd>tiré du célèbre proverbe "ADA beaucoup, mais ADI peu".</dd>
                    <dt>Adresse</dt>
                    <dd>il s'agit d'un domicile réduit à sa plus simple expression, c'est-à-dire à un numéro permettant de savoir dans quel tiroir sont cachées les chaussettes.</dd>
                    <dt>Calcul d'adresse</dt>
                    <dd>opération consistant à calculer l'adresse des personnes auxquelles on veut écrire. Très utile pour ceux qui ont tendance à oublier leur agenda et qui adorent les mathématiques.</dd>
                    <dt>Affectation</dt>
                    <dd>opération métaphysique dans laquelle, par exemple, une variable peut recevoir une constante ou une expression de ses sentiments les meilleurs. Une variable peut être désaffectée si elle porte une nom à coucher dehors.</dd>
                    <dt>Affichage</dt>
                    <dd>action de poser des affiches sur un écran de visualisation.</dd>
                    <dt>AFNOR</dt>
                    <dd>code 23-0221.12-B.</dd>
                    <dt>Agricole</dt>
                    <dd>adjectif utilisé à propos des langages de programmation terre-à-terre.</dd>
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