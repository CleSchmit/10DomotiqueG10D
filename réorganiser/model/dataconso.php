<?php
include_once 'function.php';

class dataconso
{

    private $data = array();
    private $bdd;


    public function __construct()
    {
        $this->bdd = bdd();
        $this->data();
    }


    function data()
    {
        $req = $this->bdd->prepare('SELECT Model FROM capteur_actionneur');
        $req->execute(array());
        while ($row = $req->fetch()) {
            $list = array();
            $list[] = $row['Model'];
            $this->data[] = $list;
        }
        $_SESSION['dataconso'] = $this->data;
    }
}