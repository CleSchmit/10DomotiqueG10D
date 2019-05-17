<?php

include_once 'function.php';

class capteurAction{

    private $idCapteur;
    private $value;
    private $bdd;


    public function __construct($idCapteur,$value){
        $this->idCapteur = $idCapteur;
        $this->value = $value;
        $this->bdd = bdd();
    }

    public function modifValue(){
        $req = $this->bdd->prepare('UPDATE capteur_actionneur SET Valeur = :valeur WHERE Id_Capteur = :id ');
        $req->execute(array(
            'valeur' => $this->value,
            'id' => $this->idCapteur
        ));

    }


    }