<?php
include_once 'function.php';

class supp{

    private $bdd;

    public function __construct(){
        $this->bdd = bdd();
    }

    public function suppression(){
        $req = $this->bdd->prepare('DELETE FROM profil WHERE Id_Profil= :Id_Profil ');
        $req->execute(array(

        ));
        return 1;
    }
}