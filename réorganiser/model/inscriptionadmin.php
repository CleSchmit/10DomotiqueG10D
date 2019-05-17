<?php
include_once 'function.php';


class inscriptionadmin
{

    private $Prenom;
    private $Nom;
    private $Role;
    private $Mdp;
    private $Mdp2;
    private $bdd;

    public function __construct($Prenom,$Nom,$Mdp,$Mdp2)
    {
        $Prenom = htmlspecialchars($Prenom);

        $this->Prenom = $Prenom;
        $this->Nom = $Nom;
        $this->Mdp = $Mdp;
        $this->Mdp2 = $Mdp2;
        $this->Role = "Admin";
        $this->bdd = bdd();
    }


    public function enregistrement()
    {
        $this->Mdp = password_hash($this->Mdp, PASSWORD_DEFAULT);

        $req = $this->bdd->prepare('INSERT INTO profil(Prenom,Nom,Mdp,Role) VALUES (:Prenom,:Nom,:Mdp,:Role)');
        $req->execute(array(
            'Prenom' => $this->Prenom,
            'Nom' => $this->Nom,
            'Mdp' => $this->Mdp,
            'Role' => $this->Role
        ));
        return 1;
    }
}

