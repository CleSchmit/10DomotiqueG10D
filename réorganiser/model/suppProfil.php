<?php
include_once 'function.php';

class suppProfil{

    private $Id_Profil;
    private $bdd;

    public function __construct($Id_Profil){
        $this->Id_Profil = $Id_Profil;
        $this->bdd = bdd();
    }

    public function suppression(){
        $req = $this->bdd->prepare('DELETE FROM profil WHERE Id_Profil = :Id_Profil');
        $req->execute(array(
            'Id_Profil' => $this->Id_Profil));
        return 1;
    }
}