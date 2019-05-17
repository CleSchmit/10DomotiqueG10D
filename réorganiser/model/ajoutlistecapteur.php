<?php
include_once 'function.php';

class ajoutlistecapteur{

    private $Nom;
    private $Prix;
    private $Consommation;
    private $bdd;

    public function __construct($Nom, $Prix, $Consommation)
    {
        $this->Nom = $Nom;
        $this->Prix = $Prix;
        $this->Consommation = $Consommation;
        $this->bdd = bdd();
    }

    public function enregistrement()
    {
        $req = $this->bdd->prepare('INSERT INTO liste_capteur(Nom,Prix,Consommation) VALUES (:Nom,:Prix,:Consommation)');
        $req->execute(array(
            'Nom' => $this->Nom,
            'Prix' => $this->Prix,
            'Consommation'=> $this->Consommation
        ));
        return 1;
    }
}

