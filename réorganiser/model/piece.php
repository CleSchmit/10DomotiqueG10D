<?php
include_once 'function.php';


class piece{

    private $Nom;
    private $Superficie;
    private $id;
    private $bdd;

    public function __construct($Nom, $Superficie,$id)
    {
        $this->Nom = $Nom;
        $this->Superficie = $Superficie;
        $this->id = $id;
        $this->bdd = bdd();
    }

    public function enregistrement()
    {
        $req = $this->bdd->prepare('INSERT INTO piece(Nom,Superficie,Id_Maison) VALUES (:Nom,:Superficie,:id)');
        $req->execute(array(
            'Nom' => $this->Nom,
            'Superficie' => $this->Superficie,
            'id' => $this->id
        ));
        return 1;
    }
}

