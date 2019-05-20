<?php
include_once 'function.php';

class dataconso
{

    private $model = array();
    private $conso = array();
    private $data = array();
    private $globale;
    private $bdd;


    public function __construct()
    {
        $this->bdd = bdd();
        $this->Model();
        $this->Conso();
        $this->Calcconso();
        $this->enregistrement();
    }

    function Model()
    {
        $req = $this->bdd->prepare('SELECT Model FROM capteur_actionneur');
        $req->execute(array());
        while ($row = $req->fetch()) {
            $this->model[] = $row['Model'];
        }
    }

    function Conso()
    {
        $req = $this->bdd->prepare('SELECT consommation FROM liste_capteur');
        $req->execute(array());
        while ($row = $req->fetch()) {
            $this->conso[] = $row["consommation"];
        }
        $_SESSION['consos'] = $this->conso;
    }

    function Calcconso()
    {
        for($i=0 ; $i < count($this->model); $i++)
        {
            if ($this->model[$i] == 1)
            {
                $this->globale += $this->conso[0];
            } else {
                $this->globale += $this->conso[1];
            }
        }
    }

    function enregistrement()
    {
        $req = $this->bdd->prepare('INSERT INTO consommation(globale) VALUES (:globale)');
        $req->execute(array(
            'globale' => $this->globale,
        ));
        return 1;
    }
}