<?php
include_once 'function.php';

class listeProfil
{

    private $profil = array();
    private $bdd;


    public function __construct()
    {
        $this->bdd = bdd();
        $this->profil();
    }


    function profil()
    {
        $req = $this->bdd->prepare('SELECT Id_Profil,Prenom,Nom,Email,Tel,DateNaissance,Mdp,Role,Adresse FROM profil');
        $req->execute(array());
        while ($row = $req->fetch()) {
            $list = array();
            $list[] = $row['Nom'];
            $list[] = $row['Prenom'];
            $list[] = $row['Email'];
            $list[] = $row['Tel'];
            $list[] = $row['DateNaissance'];
            $list[] = $row['Role'];
            $list[] = $row['Adresse'];
            $list[] = $row['Mdp'];
            $list[] = $row['Id_Profil'];
            $this->profil[] = $list;
        }
        $_SESSION['profil'] = $this->profil;
    }
}