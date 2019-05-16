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
        $req = $this->bdd->prepare('SELECT * FROM profil');
        $req->execute(array());
        while ($row = $req->fetch()) {
            $list = array();
            $list[] = $row['Nom'];
            $list[] = $row['Prenom'];
            $list[] = $row['Email'];
            $list[] = $row['Tel'];
            $list[] = $row['DateNaissance'];
            $list[] = $row['Adresse'];
            $list[] = $row['Role'];
            $list[] = $row['Mdp'];
            $list[] = $row['Id_Profil'];
            $list[] = $row['Validation'];
            $this->profil[] = $list;
        }
        $_SESSION['profil'] = $this->profil;
    }
}