<?php

/*
Page de connexion || login-form.
*/


session_start();
if (!isset($_SESSION['nom'])){
?>

<form method="POST" action="../controler/login.php">
    <fieldset>
        <label for='name'>Entrez votre identifiant de connexion </label>
        <input type='text' id='name' name='pseudo' placeholder="Totitomate">
        <label for='mdp'>Mot de passe </label>
        <input type='password' id='mdp' name='mdp' placeholder="Mot de passe">
        <input type='submit' name='login' value='Connexion'>
    </fieldset>
</form>
<a href="index.php" title="Page d'accueil">Accueil</a>
<a href="sign-form.php" title="S'inscrire">S'inscrire</a>

<?php 
}else {

echo "Bonjour" . $_SESSION["pseudo"] ;
echo "<form action='logout.php' method='POST'>";
echo "<button>Se deconnecter</button>";
echo "</form>";
}

//Deconnection.
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
    );
}
session_destroy();


?>