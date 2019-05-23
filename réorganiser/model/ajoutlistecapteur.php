<?php
include_once 'function.php';

class ajoutlistecapteur{

    private $Nom;
    private $Prix;
    private $Consommation;
    private $Model;
    private $bdd;

    public function __construct($Nom, $Prix, $Consommation, $Model)
    {
        $this->Nom = $Nom;
        $this->Prix = $Prix;
        $this->Consommation = $Consommation;
        $this->Model = $Model;
        $this->bdd = bdd();
    }

    public function enregistrement()
    {
        $req = $this->bdd->prepare('INSERT INTO liste_capteur(Nom,Prix,Consommation,Model) VALUES (:Nom,:Prix,:Consommation,:Model)');
        $req->execute(array(
            'Nom' => $this->Nom,
            'Prix' => $this->Prix,
            'Consommation'=> $this->Consommation,
            'Model' => $this->Model
        ));
        return 1;
    }
}

