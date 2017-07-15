<?php

//session_start();
/* DATA-BASE
 * On crée les functions de creations d'utilisateur, de recette, d'évenement.
 */

/**
 * Description of Database
 *
 * @author solo
 */

include_once "Users.php";
class Database {

    //########## Crée un utilisateur ##########
    function creeUtilisateur(Users $user) {
        //Crée un dossier si il n'existe pas.
        if (!is_dir("../controler/utilisateurs")) {
            mkdir("../controler/utilisateurs");
        }
        //user->getPseudo() va chercher le pseudo que l'on a conserver.
        $new_file = fopen("../controler/utilisateurs/" . $user->getPseudo() . ".txt", "w");
        //Serialize transforme les données sous donné binaire pour en faire ce que l'on veut.
        fwrite($new_file, serialize($user));
        //Je referme mon fichier.
        fclose($new_file);
        return true;
    }

    //########## Lecture de l'utilisateur unserialize. ##########   
    function lireUtilisateur($user){
        if(is_file('utilisateurs/' . $user . '.txt')) {
            return unserialize(file_get_contents('utilisateurs/' . $user . '.txt'));
        }
        return false;
    }
    
    //########## Lire  ##########
    
}
