<?php
/*
  Page d'inscription || input.
 */
?>
<form method="POST" action="../controler/sign.php">
    <fieldset>
        <label for='name'>Pseudo</label>
        <input type='text' id='name' name='pseudo' placeholder="Mark">
        <label for='mdp'>Password</label>
        <input type='password' id='mdp' name='mdp' placeholder="Mot de passe ">
        <input type="submit" name="inscription" value="inscription">
    </fieldset>
</form>
<a href="index.php" title="Page d'accueil">Accueil</a>
<a href="login-form.php" title="Page d'accueil">Se connecter</a>

<?php
?>