<!DOCTYPE html>
<!--
* Auteur : Gouveia de OLiveira André
* Title : EE_Revision
* Date : 30.08.2018
* Version : 1.0.0
* Description : C'est un site d'échange d'information
-->
<form action="" method="post">
    <fieldset>
        <legend>Connection</legend>
        <div>Identifiant:</div>
        <input type="text" id="pseudo" name="pseudo" value="<?= $pseudo ?>">
        <div>Mot de passe:</div>
        <input type="password" id="pwd" name="pwd" value=""><br>
        <input type="submit" name="submit">
    </fieldset>
</form>
<a href="inscription.php">Pas encore inscrit?</a>
