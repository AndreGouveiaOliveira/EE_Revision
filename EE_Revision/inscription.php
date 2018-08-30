<meta charset="UTF-8">
<?php
/**
* Auteur : Gouveia de OLiveira André
* Title : EE_Revision
* Date : 30.08.2018
* Version : 1.0.0
* Description : C'est un site d'échange d'information
 */

include_once 'functions.php';
if (filter_has_var(INPUT_POST, 'submit')) {
    $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_STRING);
    $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_STRING);
    $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_STRING);
    $validationPwd = filter_input(INPUT_POST, "validationPwd", FILTER_SANITIZE_STRING);
}

require_once 'inscriptionFormulaire.php';