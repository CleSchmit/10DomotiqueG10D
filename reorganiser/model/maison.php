<?php
include_once 'function.php';


class maison{

    private $Nom;
    private $Adresse;
    private $Superficie;
    private $NbPieces;
    private $NbHabitant;
    private $bdd;

    public function __construct($Nom, $Adresse, $Superficie, $NbPieces, $NbHabitant)
    {
        $this->Nom = $Nom;
        $this->Adresse = $Adresse;
        $this->Superficie = $Superficie;
        $this->NbHabitant = $NbHabitant;
        $this->NbPieces = $NbPieces;
        $this->bdd = bdd();
    }

    public function enregistrement()
    {
        $req = $this->bdd->prepare('INSERT INTO model_maison(Nom,Adresse,Superficie,NbPieces,NbHabitant,Id_Profil) VALUES (:Nom,:Adresse,:Superficie,:NbPieces,:NbHabitant,:Id)');
        $req->execute(array(
            'Nom' => $this->Nom,
            'Adresse' => $this->Adresse,
            'Superficie' => $this->Superficie,
            'NbPieces' => $this->NbPieces,
            'NbHabitant' => $this->NbHabitant,
            'Id'=>$_SESSION['id']
        ));
        return 1;
    }
}

