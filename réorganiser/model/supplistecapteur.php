<?php
include_once 'function.php';

class supplistecapteur{

    private $Nom;
    private $bdd;

    public function __construct($Nom){
        $this->Nom = $Nom;
        $this->bdd = bdd();
    }

    public function suppression(){
        $req = $this->bdd->prepare('DELETE FROM liste_capteur WHERE Nom = :Nom');
        $req->execute(array(
            'Nom' => $this->Nom));
        return 1;
    }
}