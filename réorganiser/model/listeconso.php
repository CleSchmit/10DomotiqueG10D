<?php
include_once 'function.php';

class listeconso
{

    private $listedata = array();
    private $listedate = array();
    private $adresse;
    private $bdd;


    public function __construct()
    {
        $this->adresse = $_SESSION['Adresse'];
        $this->bdd = bdd();
        $this->liste();
    }


    function liste()
    {
        $req = $this->bdd->prepare('SELECT globale,temps FROM consommation WHERE Adresse = :adresse');
        $req->execute(array(
            'adresse' => $this->adresse));
        while ($row = $req->fetch()) {
            $this->listedata[] = $row['globale'];
            $this->listedate[]= $row['temps'];
        }
        $_SESSION['liste1'] = $this->listedata;
        $_SESSION['liste2'] = $this->listedate;
    }
}