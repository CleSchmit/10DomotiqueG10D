<?php
include_once 'function.php';

class listenote
{

    private $listetoile = array();
    private $listenom = array();
    private $bdd;


    public function __construct()
    {
        $this->bdd = bdd();
        $this->liste();
    }


    function liste()
    {
        $req = $this->bdd->prepare('SELECT Nb_Etoile,Nom FROM notation ORDER BY Nom');
        $req->execute(array());
        while ($row = $req->fetch()) {
            $this->listetoile[] = $row['Nb_Etoile'];
            $this->listenom[]= $row['Nom'];
        }
        $_SESSION['liste1'] = $this->listetoile;
        $_SESSION['liste2'] = $this->listenom;
    }
}