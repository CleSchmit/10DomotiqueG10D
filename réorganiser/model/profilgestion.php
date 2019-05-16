<?php
include_once 'function.php';

class Maison{

    private $Maison = array();
    private $bdd;


    public function __construct() {
        $this->bdd = bdd();
        $this->maison();
    }


    function maison(){
        $req = $this->bdd->prepare('SELECT Id_Maison,Nom FROM model_maison WHERE Adresse = :Adresse');
        $req->execute(array(
            'Adresse' => $_SESSION['Adresse']
        ));
        while($row = $req->fetch()){
            $list = array();
            $list[]= $row['Id_Maison'];
            $list[]= $row['Nom'];
            $list[] = $this->piece($list[0]);
            $this->Maison[] = $list;
        }
        $_SESSION['Maison'] = $this->Maison;


    }


    function piece($id){

        $req = $this->bdd->prepare('SELECT Id_Piece,Nom FROM piece WHERE Id_Maison = :id');
        $req->execute(array(
            'id' => $id
        ));
        $listPiece = array();
        while($row = $req->fetch()){
            $list = array();
            $list[]= $row['Id_Piece'];
            $list[]= $row['Nom'];
            $list[] = $this->capteur($list[0]);
            $listPiece[] = $list;
        }
        return $listPiece;

    }

    function capteur($id){

        $req = $this->bdd->prepare('SELECT Id_Capteur,Nom,Valeur,Model FROM capteur_actionneur WHERE Id_Piece = :id');
        $req->execute(array(
            'id' => $id
        ));
        $listCapteur = array();
        while ($row = $req->fetch()) {
            $list = array();
            $list[] = $row['Id_Capteur'];
            $list[] = $row['Nom'];
            $list[] = $row['Valeur'];
            $list[] = $row['Model'];
            $listCapteur[] = $list;
        }
        return $listCapteur;
    }
}

function AugmenterValeur($id){
    $bdd = bdd();
    $req = $bdd->prepare('SELECT Valeur FROM capteur_actionneur WHERE Id_Capteur = :id');
    $req->execute(array(
        'id' => $id
    ));
    $response = $req->fetch();
    $Valeur = $response['Valeur'] + 1;
    $requet = $bdd->prepare('UPDATE capteur_actionneur SET Valeur = :Val WHERE Id_Capteur = :id');
    $requet->execute(array(
        'id' => $id,
        'Val' => $Valeur
    ));
    return true;

}