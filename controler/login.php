<?php

/* RECUP CONNEXION.
 * Recuperation des inputs du formulaire de connexion (traitement)
 */
session_start();

include_once "../modele/Users.php";
include_once "../modele/Database.php";
$database = new Database();



if (isset($_POST["login"])) {
    $filter = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $pseudo = $filter["pseudo"];
    $mdp = md5($filter["mdp"]);

    $recupUser = $database->lireUtilisateur($pseudo);
    if ($recupUser) {
        $getMdp = $recupUser->getMdp();

        if ($getMdp == $mdp) {
            $_SESSION['pseudo'] = $pseudo;
            echo 'Putain sa marche';
        } else {
            echo "Veuillez réessayer, votre identifiant semble incorrect" . "<br />";
            echo "l'utilisateur : " . $pseudo . " n'apparait pas dans la base de données";
            //REFRESH
            header("refresh:05;url=../vue/index.php");
        }
    }
}
