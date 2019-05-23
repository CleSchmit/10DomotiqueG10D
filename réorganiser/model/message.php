<?php
include_once 'function.php';


class message{
    private $id_conv;
    private $pseudo;
    private $message;
    private $bdd;
    
    public function __construct($id, $pseudo, $message){
        $this->id_conv = $id;
        $this->pseudo = $pseudo;
        $this->message = $message;
        $this->bdd = bdd();
    }
    public function enregistrement(){
        $req = $this->bdd->prepare('INSERT INTO messages (id_conv, utilisateur, contenu) VALUES(?, ?, ?)');
        $req->execute(array($this->id_conv, $this->pseudo, $this->message));
        return 1;
    }
    public function supprimer($id){
        $this->bdd->query('DELETE from messages WHERE id=\'' . $id . '\'');
        return 1;
    }
}

