<!DOCTYPE html>
<?php include_once 'functions.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>Bonjour <?=$_SESSION["prenom"]." ".$_SESSION["nom"] ?>, vous êtes connecté !</div> 
        <form>
            <fieldset>
                <legend>Nouveau post</legend>
                <div>Titre:</div>
                <input type="text" name="title" id="title" value="">
                <div>Description</div>
                <input type="text" name="description" id="description" value="">
                <input type="submit" name="submit" value="Insérer">
            </fieldset>
        </form>
    </body>
</html>
