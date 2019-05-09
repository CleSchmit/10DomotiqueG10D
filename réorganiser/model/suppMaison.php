<?php
include_once 'function.php';

class suppMaison{

    private $Id_Maison;
    private $bdd;

    public function __construct($Id_Maison){
        $this->Id_Maison = $Id_Maison;
        $this->bdd = bdd();
    }

    public function suppression(){
        $req = $this->bdd->prepare('DELETE FROM model_maison WHERE Id_Maison = :Id_Maison');
        $req->execute(array(
            'Id_Maison' => $this->Id_Maison));
        return 1;
    }
}