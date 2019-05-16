<?php
include_once 'function.php';

class modif{

    private $modification;
    private $element;
    private $bdd;


    public function __construct($modification, $element)
    {
        $this->modification = $modification;
        $this->element = $element;
        $this->bdd = bdd();
    }

    public function verif()
    {
        if ($this->element == 'Prenom') {
                return 'ok';
        } else if ($this->element == 'Nom') {
                return 'ok';
        } else if ($this->element == 'Email') {
            $syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
            if (preg_match($syntaxe, $this->modification)) {
                return 'ok';
            } else {
                return 'Syntaxe de l\'adresse Email incorrect ';
            }
        } else if ($this->element == 'Tel'){
            return 'ok';
        } else if ($this->element == 'Adresse'){
            return 'ok';
        }  else if ($this->element == 'Validation'){
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
        }else if($this->element == 'Adresse'){
            $req = $this->bdd->prepare('UPDATE profil SET Adresse = :modification WHERE Email = :Email ');
        }else if($this->element == 'Validation'){
            $req = $this->bdd->prepare('UPDATE profil SET Validation = :modification WHERE Email = :Email ');
        }
        $req->execute(array(
            'modification' => $this->modification,
            'Email' => $_SESSION['profil'][$_GET['i']][2]
        ));
        return 1;
    }
}