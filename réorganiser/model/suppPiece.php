<?php
include_once 'function.php';

class suppPiece{

    private $Id_Piece;
    private $bdd;

    public function __construct($Id_Piece){
        $this->Id_Piece = $Id_Piece;
        $this->bdd = bdd();
    }

    public function suppression(){
        $req = $this->bdd->prepare('DELETE FROM piece WHERE Id_Piece = :Id_Piece');
        $req->execute(array(
            'Id_Piece' => $this->Id_Piece));
        return 1;
    }
}