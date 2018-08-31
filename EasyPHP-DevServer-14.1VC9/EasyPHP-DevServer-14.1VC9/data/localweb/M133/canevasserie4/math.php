<?php

/**
 * Fichier : math.php
 * Projet : série d'exercie N° 4, M133
 * Description : définition de fonctions mathématiques, 
 */

/**
 * Retourne Oui ou Non en fonction du paramètre booléen fourni
 * @param bool $value (vrai ou faux)
 * @return string Oui ou Non
 */
function OuiNon($value) {
    if ($value == true)
        return 'Oui';
    else
        return 'Non';
}

/**
 * Indique si le nombre passé en paramètre est pair
 * @param int $n le nombre à évaluer
 * @return bool vrai si le nombre est pair, faux s'il est impair
 */
function EstPair($n) {
// ...
    if (($n%2)==0) {
        return TRUE;
    }
}

/**
 * Indique si le nombre passé en paramètre est impair
 * @param int $n le nombre à évaluer
 * @return bool vrai si le nombre est impair, faux s'il est pair
 */
function EstImpair($n) {
// ....
    if (($n%2)==1) {
        return TRUE;
    }
}

/**
 * Indique si le nombre passé en paramètre est premier
 * @param int $n le nombre à évaluer
 * @return bool vrai si le nombre est premier, faux s'il n'est pas premier
 */
function EstPremier($n) {
// ....
    for ($i = 2; $i <= $n/2; $i++) {
        if (($n % $i) == 0) {
            return FALSE;
        }
        return TRUE;
    }
}

/**
 * Convertit un nombre entier dans sa représentation dans la base fournie en
 * paramètres
 * @param int $n le nombre à convertir
 * @param int $base base pour l'affichage (compris entre 2 et 16)
 * @return string le nombre dans sa représentation en base $base
 */
function DecToBase($n, $base) {
// ...
    $digits = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $resultat="";
    do {
        $reste = $n % $base;
        $resultat .= $digits[$reste];
        $n = ($n-$reste)/$base;
    } while ($n > 0);
    return $resultat;
}

/**
 * Convertit un nombre entier dans sa représentation dans la base schadok
 * @param int $n le nombre à convertir
 * @return string le nombre dans sa représentation en base schadok
 */
function DecToShadok($n) {
// ....
    
    $digits = array('GA','BU','ZO','MEU');
    $resultat="";
    do {
        $reste = $n % 4;
        $resultat = $digits[$reste].$resultat;
        $n = ($n-$reste)/4;
    } while ($n > 0);
    return $resultat;
}

/**
 *  calul le plus grand commun diviseur des deux nombres passés en paramètres
 * @param int $a Permier nombre
 * @param int $b Deuxième nombre
 * @return int le PGCD
 */
function PGCD($a, $b) {
    // ....
}

/**
 *  calul le plus petit commun multiple des deux nombres passés en paramètres
 * @param int $a Permier nombre
 * @param int $b Deuxième nombre
 * @return int le PPCM
 */
function PPCM($a, $b) {
// ....
}
