<?php
include_once 'function.php';


class ajoutcapteur{

    private $Nom;
    private $Model;
    private $id;
    private $bdd;

    public function __construct($Nom, $Model, $id)
    {
        $this->Nom = $Nom;
        $this->Model = $Model;
        $this->id = $id;
        $this->bdd = bdd();
    }

    public function enregistrement()
    {
        $req = $this->bdd->prepare('INSERT INTO capteur_actionneur(Nom,Model,Id_Piece) VALUES (:Nom,:Model,:id)');
        $req->execute(array(
            'Nom' => $this->Nom,
            'Model' => $this->Model,
            'id'=> $this->id
        ));
        return 1;
    }
}

