<?php
include_once 'function.php';

class listeCapteur
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
        $req = $this->bdd->prepare('SELECT Nom,Prix,Consommation,Model FROM liste_capteur');
        $req->execute(array());
        while ($row = $req->fetch()) {
            $list = array();
            $list[] = $row['Nom'];
            $list[] = $row['Prix'];
            $list[] = $row['Consommation'];
            $list[] = $row['Model'];
            $this->capteur[] = $list;
        }
        $_SESSION['capteur'] = $this->capteur;
    }
}