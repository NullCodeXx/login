<?php

/* RECUP TRAITEMENT.
 * Recuperation des inputs du formulaire inscription (traitement).
 */
session_start();
include_once "../modele/Database.php";
//include_once "../modele/Users.php";

//VERIFIE SI SA EXISTE.
if (isset($_POST["inscription"])) {
//FILTRE.
$filter = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//INSTANCY DATABASE.
$creeUsers = new DataBase();
//UTILISE LA FUNCTIONDE DE DATABASE ET LUI AJOUTE UNE iNSTANCE, DE LA RECUP, UN FILTRE INPUT, UN MDP CRYPTER.
$creeUsers->creeUtilisateur(new Users(htmlspecialchars($filter["pseudo"]), htmlspecialchars(md5($filter["mdp"]))));
//CONSERVE LE PSEUDO.
$_SESSION["pseudo"] = $filter["pseudo"];
//COMMENTAIRE.
echo "e." . "Bravo votre compte a été cré<br />";
echo "Redirection dans 5 seconde" . "<br />";
//REFRESH
header("refresh:05;url=../vue/index.php");
}else {
    echo "error votre compte n'as pas pus être crée, veuillez signaler cette imprévus au service de dévelloppement "
    . "<a href='mailto:code-db_@outlook.fr'>Cliquer ici</a>";
}
