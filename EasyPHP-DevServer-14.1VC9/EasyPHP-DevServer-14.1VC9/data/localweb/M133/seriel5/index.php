<?php
// Module 133 règlement 2014, série 5, Site protégé
// Description : petite application pour protéger des pages
//
// Auteur : Votre nom
// Version 1.0 / Vos initiales / 18.12.2015 / Codage initial

// Page d'accueil

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Site protégé - Accueil</title>
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
                <p class="aparte">Cette page est visible par tous les utilisateurs.</p>
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Suspendisse rutrum, ipsum quis tristique facilisis, 
                    magna ipsum pharetra est, sed placerat diam tellus non massa. 
                    Class aptent taciti sociosqu ad litora torquent per conubia 
                    nostra, per inceptos himenaeos. Suspendisse potenti. 
                    Suspendisse potenti. Nam in cursus justo. Suspendisse potenti. 
                    Duis malesuada massa erat. Maecenas placerat interdum justo vitae tincidunt. 
                    Maecenas vel libero et tellus fermentum volutpat ut et elit. 
                    Phasellus dapibus, magna a eleifend dignissim, quam ante feugiat 
                    magna, ut tincidunt nisi nulla eu dui. Integer ultricies dui 
                    non metus elementum elementum. Morbi mollis tincidunt eleifend.</p>

                <p>In non enim nec lectus tempor vulputate. Integer non tortor leo. 
                    Ut malesuada mollis nibh vel mollis. Mauris rhoncus, sem quis 
                    porttitor interdum, risus sapien blandit sapien, et dictum felis 
                    dolor sit amet tellus. Vivamus vestibulum magna ac augue convallis 
                    viverra. Donec nulla est, suscipit non convallis in, imperdiet 
                    sed orci. Proin sed arcu in enim elementum pharetra. Pellentesque 
                    habitant morbi tristique senectus et netus et malesuada fames 
                    ac turpis egestas.</p>

                <p>Suspendisse dui nunc, sodales eu gravida ac, ullamcorper ornare 
                    ligula. Aenean vitae tempus lorem. Maecenas ac nunc eros. 
                    Curabitur in mi leo. Nunc ac libero in felis dignissim egestas 
                    vitae rutrum mi. Aenean quis quam eu risus suscipit vestibulum 
                    id eu nisl. Quisque at felis vitae nisi molestie commodo. Mauris 
                    ullamcorper, metus vel consequat varius, enim urna varius massa, 
                    non ornare odio lorem at odio. Praesent vitae purus a enim adipiscing varius. 
                    Phasellus non diam sed libero laoreet cursus dictum ac quam.</p>
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


    </body></html>