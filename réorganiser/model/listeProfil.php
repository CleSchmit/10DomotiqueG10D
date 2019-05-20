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
        $req = $this->bdd->prepare('SELECT Id_Profil,Prenom,Nom,Email,Tel,DateNaissance,Mdp,Role,Adresse,Validation FROM profil WHERE Role = :role');

        $role = array('Admin', 'Gestionnaire', 'Utilisateur');

        for ($i = 0; $i < sizeof($role); $i++){
            $req->execute(array('role' => $role[$i]));
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
                $list[] = $row['Validation'];
                $this->profil[] = $list;
            }
        }
        $_SESSION['profil'] = $this->profil;
    }
}