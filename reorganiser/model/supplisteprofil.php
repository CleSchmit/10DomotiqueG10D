<?php
include_once 'function.php';

class supplisteprofil{

    private $Nom;
    private $bdd;

    public function __construct($Nom){
        $this->Nom = $Nom;
        $this->bdd = bdd();
    }

    public function suppression(){
        $req = $this->bdd->prepare('DELETE FROM profil WHERE Id_Profil = :Nom');
        $req->execute(array(
            'Nom' => $this->Nom));
        return 1;
    }
}