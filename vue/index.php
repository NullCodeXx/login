<?php

//Page d'index (display).


session_start();

echo "<h1>Index</h1>
<p>Vous n'êtes pas encore inscrit? ne perdez plus de temps <a href='sign-form.php' title='Vous inscrire'>Inscrivez-vous</a> !</p>
<p>Les membres c'est par ici, <a href='login-form.php' title='Vous connecter'>Connectez vous</a> !</p>
<p>Pour ajouter un évenement ou des évenements si vous êtes mega motivées, c'est par  <a href='post-form.php' title='Ajouter un évenement'>ici</a> !</p>";

/*
  if($_POST["inscription"] === true) {
  echo "Bienvenue" . "$_SESSION['pseudo']";
  }
 */
?>

