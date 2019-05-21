<?php
include_once 'function.php';

class dataconso
{

    private $model = array();
    private $conso = array();
    private $data = array();
    private $globale;
    private $adresse;
    private $bdd;


    public function __construct()
    {
        $this->adresse = $_SESSION['Adresse'];
        $this->bdd = bdd();
        $this->immeuble();
        $this->Conso();
        $this->Calcconso();
        $this->enregistrement();
    }

    function immeuble()
    {
        $req = $this->bdd->prepare('SELECT DISTINCT Id_Capteur, Model FROM capteur_actionneur INNER JOIN piece ON piece.Id_Piece = capteur_actionneur.Id_Piece INNER JOIN model_maison ON model_maison.Id_Maison = piece.Id_Maison WHERE Adresse =:adresse ORDER BY Id_Capteur');
        $req->execute(array(
            'adresse' => $this->adresse));
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
            for($j=1 ; $j <= count($this->conso) ; $j++)
            {
                if ($this->model[$i] == $j)
                {
                    $this->globale += $this->conso[$j-1];
                }
            }
        }
    }

    function enregistrement()
    {
        $req = $this->bdd->prepare('INSERT INTO consommation(globale,Adresse) VALUES (:globale,:adresse)');
        $req->execute(array(
            'globale' => $this->globale,
            'adresse' => $this->adresse,
        ));
        return 1;
    }
}