<?php
include_once 'function.php';

class supp{

    private $Email;
    private $bdd;

    public function __construct($Email){
        $this->Email = $Email;
        $this->bdd = bdd();
    }

    public function suppression(){
        $req = $this->bdd->prepare('DELETE FROM profil WHERE Emal= :Email ');
        $req->execute();
        return 1;
    }
}