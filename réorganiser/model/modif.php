<?php
include_once 'function.php';

class modif{

    private $modification;
    private $element;
    private $bdd;


    public function __construct($modification, $element){

        $this->modification = $modification;
        $this->element = $element;
        $this->bdd = bdd();
    }

    public function verif()
    {
        if ($this->element == 'Prenom') {
            if (strlen($this->modification) > 5 AND strlen($this->modification) < 20) {
                return 'ok';
            } else {
                return 'Le Prenom doit contenir entre 5 et 20 caractères';
            }
        } else if ($this->element == 'Nom') {
            if (strlen($this->modification) > 5 AND strlen($this->modification) < 20) {
                return 'ok';
            } else {
                return 'Le Nom doit contenir entre 6 et 20 caractères';
            }
        } else if ($this->element == 'Email') {
            $syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
            if (preg_match($syntaxe, $this->modification)) {
                return 'ok';
            } else {
                return 'Syntaxe de l\'adresse Email incorrect ';
            }
        }else if ($this->element == 'Mdp'){
            if (strlen($this->modification) > 5 AND strlen($this->modification) < 20) {
                return 'ok';
            }else{
                return 'la taille du mot de passe doit être comprise entre 6 et 20 caractères';
            }
        }else if ($this->element == 'Tel'){
            return 'ok';
        }
    }



    public function enregistrement(){
        if ($this->element == 'Prenom'){
            $req = $this->bdd->prepare('UPDATE profil SET Prenom = :modification WHERE Email = :Email ');
        }else if($this->element == 'Nom'){
            $req = $this->bdd->prepare('UPDATE profil SET Nom = :modification WHERE Email = :Email ');
        }else if($this->element == 'Email'){
            $req = $this->bdd->prepare('UPDATE profil SET Email = :modification WHERE Email = :Email ');
        }else if($this->element == 'Tel'){
            $req = $this->bdd->prepare('UPDATE profil SET Tel = :modification WHERE Email = :Email ');
        }else if($this->element == 'Mdp'){
            $req = $this->bdd->prepare('UPDATE profil SET Mdp = :modification WHERE Email = :Email ');
        }
        $req->execute(array(
            'modification' => $this->modification,
            'Email' => $_SESSION['Email']
       ));
        return 1;
    }

    public function session(){
        $requete = $this->bdd->prepare('SELECT * FROM profil WHERE Email = :Email ');
        $requete->execute(array(
            'Email' => $_SESSION['Email']));
        $response = $requete->fetch();
        $_SESSION['Prenom'] = $response['Prenom'];
        $_SESSION['Nom'] = $response['Nom'];
        $_SESSION['Tel'] = $response['Tel'];
        $_SESSION['Naissance'] = $response['DateNaissance'];
        $_SESSION['Email'] = $response['Email'];
        $_SESSION['Mdp'] = $response['Mdp'];

        return 1;
    }
}