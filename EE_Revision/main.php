<!DOCTYPE html>
<?php
include_once 'functions.php';
if (filter_has_var(INPUT_POST, 'deconnect')) {
    logout();
}
if (filter_has_var(INPUT_POST, 'submit')) {
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING);
    if (empty($title) || empty($description)) {
        echo "<h3>La saisie d'une description et d'un titre sont obligatoire!</h3>";
    } else {
        insertPost($title, $description, $_SESSION["idUser"]);
        $title = "";
        $description = "";
        echo "<h3>Votre post a bien été publié et figure ci-dessous!</h3>";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Bonjour <?= $_SESSION["surname"] . " " . $_SESSION["name"] ?>, voici votre fil d'actualités!</h3> 
        <form method="post">
            <fieldset>
                <legend>Nouveau post</legend>
                <div>Titre:</div>
                <input type="text" name="title" id="title" value="<?php
                if (empty($title)) {
                    echo "";
                } else {
                    echo $title;
                }
                ?>">
                <div>Description</div>
                <textarea type="text" name="description" id="description" rows="8" cols="50" value="<?php
                          if (empty($description)) {
                              echo "";
                          } else {
                              echo $description;
                          }
                          ?>"></textarea><br>
                <input type="submit" name="submit" value="Insérer">
            </fieldset>
            <input type="submit" name="deconnect" value="Déconnection">
        </form>
        <?php
        $posts = getPosts($_SESSION["idUser"]);
        foreach ($posts as $publication) {
            ?>
            <h3><?= $publication["title"] ?></h3>
            <div><?= $publication["description"] ?></div>
<?php } ?>
    </body>
</html>
