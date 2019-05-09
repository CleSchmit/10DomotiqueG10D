<?php
include_once 'function.php';

class suppCapteur{

    private $Id_Capteur;
    private $bdd;

    public function __construct($Id_Capteur){
        $this->Id_Capteur = $Id_Capteur;
        $this->bdd = bdd();
    }

    public function suppression(){
        $req = $this->bdd->prepare('DELETE FROM capteur_actionneur WHERE Id_Capteur = :Id_Capteur');
        $req->execute(array(
            'Id_Capteur' => $this->Id_Capteur));
        return 1;
    }
}