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
    public function supprimer(){
        $this->bdd->query('DELETE from conversation WHERE id=\'' . $_SESSION['id_conv'] . '\'');
        $this->bdd->query('DELETE from messages WHERE id_conv=\'' . $_SESSION['id_conv'] . '\'');
        return 1;
    }
}

