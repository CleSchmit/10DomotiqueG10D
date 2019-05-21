<?php
include_once 'function.php';


class conversation{
    private $id_conv;
    private $nom;
    private $bdd;
    
    public function __construct($nomConv){
        $this->nom = $nomConv;
        $this->bdd = bdd();
    }
    public function enregistrement(){
        $req = $this->bdd->prepare('INSERT INTO conversation (nom) VALUES( ?)');
        $req->execute(array($this->nom));
        return 1;
    }
}

