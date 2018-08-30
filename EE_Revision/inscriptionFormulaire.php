<form action="inscription.php">
    <fieldset>
        <legend>Inscription</legend>
        <div>Prénom:</div>
        <input type="text" id="prenom" name="pseudo" value="<?= $prenom ?>">
        <div>Nom:</div>
        <input type="text" id="nom" name="pseudo" value="<?= $nom ?>">
        <div>Identifiant:</div>
        <input type="text" id="pseudo" name="pseudo" value="<?= $pseudo ?>">
        <div>Mot de passe:</div>
        <input type="password" id="pwd" name="pwd" value="">
        <div>Validation du mot de passe:</div>
        <input type="password" id="validationPwd" name="validationPwd" value=""><br>
        <input type="submit" name="submite "value="Valider" >
    </fieldset>
</form>
