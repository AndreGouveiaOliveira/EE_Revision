<?php

/**
 * Auteur : Gouveia de OLiveira André
 * Title : EE_Revision
 * Date : 30.08.2018
 * Version : 1.0.0
 * Description : C'est un site d'échange d'information
 */
session_start();

if (isset($_SESSION["name"]) == NULL) {
    $_SESSION["name"] = "";
}
if (isset($_SESSION["surname"]) == NULL) {
    $_SESSION["surname"] = "";
}
if (isset($_SESSION["login"]) == NULL) {
    $_SESSION["login"] = "";
}
if (isset($_SESSION["idUser"]) == NULL) {
    $_SESSION["idUser"] = "";
}

function connectDb() {
    $server = '127.0.0.1';
    $login = 'root';
    $pwd = '';
    $dbname = 'forum';

    static $db = null;

    if ($db === null) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $db = new PDO("mysql:host=$server;dbname=$dbname", $login, $pwd, $pdo_options);
        $db->exec('SET CHARACTER SET utf8');
    }
    return $db;
}

function checkUser($login, $pwd) {
    $db = connectDb();

    $sql = "SELECT login, password"
            . " FROM users"
            . " WHERE login = :login AND password = :pwd";
    $request = $db->prepare($sql);
    //echo $sql. " ".$pseudo. " ".$pwd;
    if ($request->execute(array(
                'login' => $login,
                'pwd' => sha1($pwd)))) {
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return null;
    }
}

function createUser($surname, $name, $login, $pwd) {
    $db = connectDb();

    $sql = "INSERT INTO users(surname,name,login,password)"
            . " VALUES(:surname, :name, :login, :pwd)";
    $request = $db->prepare($sql);
    if ($request->execute(array(
                'surname' => $surname,
                'name' => $name,
                'login' => $login,
                'pwd' => sha1($pwd)))) {
        return $db->lastInsertId();
    } else {
        return NULL;
    }
}

function userInformation($login) {
    $db = connectDb();

    $sql = "SELECT name,surname,idUser"
            . " FROM users"
            . " WHERE login = :login";
    $request = $db->prepare($sql);
    //echo $sql. " ".$pseudo;
    if ($request->execute(array(
                'login' => $login))) {
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return null;
    }
}

function pseudoExist($login) {
    $db = connectDb();

    $sql = "SELECT login"
            . " FROM users"
            . " WHERE login = :login";
    $request = $db->prepare($sql);
    //echo $sql. " ".$pseudo;
    if ($request->execute(array(
                'login' => $login))) {
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return NULL;
    }
}

function logout(){
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");
    exit;
}

function insertPost($title,$description,$idUser){
    $db = connectDb();

    $sql = "INSERT INTO news(title,description,idUser)"
            . " VALUES(:title, :description, :idUser)";
    $request = $db->prepare($sql);
    if ($request->execute(array(
                'title' => $title,
                'description' => $description,
                'idUser' => $idUser))) {
        return $db->lastInsertId();
    } else {
        echo "<h3>Le post n'a pas pu être inséré</h3>";
    }
}

function getPosts($idUser){
    $db = connectDb();

    $sql = "SELECT title, description"
            . " FROM news"
            . " WHERE idUser = :idUser";
    $request = $db->prepare($sql);
    if ($request->execute(array(
                'idUser' => $idUser))) {
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return NULL;
    }
}