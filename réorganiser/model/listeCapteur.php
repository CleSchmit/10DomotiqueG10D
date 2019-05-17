<?php
include_once 'function.php';

class Capteur
{

    private $capteur = array();
    private $bdd;


    public function __construct()
    {
        $this->bdd = bdd();
        $this->capteur();
    }


    function capteur()
    {
        $req = $this->bdd->prepare('SELECT Nom,Prix,Consommation FROM liste_capteur');
        $req->execute(array());
        while ($row = $req->fetch()) {
            $list = array();
            $list[] = $row['Nom'];
            $list[] = $row['Prix'];
            $list[] = $row['Consommation'];
            $this->capteur[] = $list;
        }
        $_SESSION['capteur'] = $this->capteur;
    }
}