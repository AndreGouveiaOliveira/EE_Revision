<?php

/**
 * Auteur : Gouveia de OLiveira André
 * Title : EE_Revision
 * Date : 30.08.2018
 * Version : 1.0.0
 * Description : C'est un site d'échange d'information
 */
session_start();

if (isset($_SESSION["nom"]) == NULL) {
    $_SESSION["nom"] = "";
}
if (isset($_SESSION["prenom"]) == NULL) {
    $_SESSION["prenom"] = "";
}

function connectDb() {
    $server = '127.0.0.1';
    $pseudo = 'root';
    $pwd = '';
    $dbname = 'forum';

    static $db = null;

    if ($db === null) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $db = new PDO("mysql:host=$server;dbname=$dbname", $pseudo, $pwd, $pdo_options);
        $db->exec('SET CHARACTER SET utf8');
    }
    return $db;
}

function checkUser($pseudo, $pwd) {
    $db = connectDb();

    $sql = "SELECT login, password"
            . " FROM users"
            . " WHERE login = :pseudo AND password = :pwd";
    $request = $db->prepare($sql);
    //echo $sql. " ".$pseudo. " ".$pwd;
    if ($request->execute(array(
                'pseudo' => $pseudo,
                'pwd' => $pwd))) {
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return null;
    }
}

function createUser($prenom, $nom, $pseudo, $pwd) {
    $db = connectDb();

    $sql = "INSERT INTO users(surname,name,login,password)"
            . " VALUES(:prenom, :nom, :pseudo, :pwd)";
    $request = $db->prepare($sql);
    if ($request->execute(array(
                'prenom' => $prenom,
                'nom' => $nom,
                'pseudo' => $pseudo,
                'pwd' => sha1($pwd)))) {
        return $db->lastInsertId();
    } else {
        return NULL;
    }
}

function userInformation($pseudo) {
    $db = connectDb();

    $sql = "SELECT name,surname"
            . " FROM users"
            . " WHERE login = :pseudo";
    $request = $db->prepare($sql);
    //echo $sql. " ".$pseudo;
    if ($request->execute(array(
                'pseudo' => $pseudo))) {
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return null;
    }
}
