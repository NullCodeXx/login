<?php

/*  MODELE.
 * Class Users
 */

/**
 * Description of Users
 *
 * @author solo
 */

class Users {
   private $pseudo;
    private $mdp;
    
    function __construct($pseudo, $mdp) {
        $this->pseudo = $pseudo;
        $this->mdp = $mdp;
    }
    
    function getPseudo() {
        return $this->pseudo;
    }

    function getMdp() {
        return $this->mdp;
    }
}
