<?php
include_once 'function.php';

class listeconso
{

    private $listedata = array();
    private $listedate = array();
    private $bdd;


    public function __construct()
    {
        $this->bdd = bdd();
        $this->liste();
    }


    function liste()
    {
        $req = $this->bdd->prepare('SELECT globale,temps FROM consommation');
        $req->execute(array());
        while ($row = $req->fetch()) {
            $this->listedata[] = $row['globale'];
            $this->listedate[]= $row['temps'];
        }
        $_SESSION['liste1'] = $this->listedata;
        $_SESSION['liste2'] = $this->listedate;
    }
}