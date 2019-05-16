<?php
include_once 'function.php';


class inscriptiongestionnaire{

    private $Email;
    private $Role;
    private $Adresse;
    private $Mdp;
    private $Mdp2;
    private $bdd;

    public function __construct($Email,$Mdp,$Mdp2,$Adresse)
    {
        $Email = htmlspecialchars($Email);

        $this->Email = $Email;
        $this->Adresse = $Adresse;
        $this->Mdp = $Mdp;
        $this->Mdp2 = $Mdp2;
        $this->Role = "Gestionnaire";
        $this->bdd = bdd();
    }

    public function verif()
    {
        $syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';

        if(preg_match($syntaxe,$this->Email)){ /*Email bon*/
            if(strlen($this->Mdp) > 5){ /*Si le mot de passe à le bon format*/
                if($this->Mdp == $this->Mdp2){/*Deux mots de passe bon*/
                    return 'ok';
                } else { /*Mot de passe !=*/
                    $erreur = 'Les mots de passe doivent être identique';
                    return $erreur;
                }
            } else {/*Mauvais format du mot de passe*/
                $erreur = 'Le mot de passe doit contenir entre 5 et 20 caractères';
                return $erreur;
            }
        } else { /*Email mauvais*/
            $erreur = 'Syntaxe de l\'adresse Email incorrect ';
            return $erreur;
        }
    }


    public function enregistrement()
    {
        $req = $this->bdd->prepare('INSERT INTO profil(Email,Mdp,Role,Adresse) VALUES (:Email,:Mdp,:Role,:Adresse)');
        $req->execute(array(
            'Email' => $this->Email,
            'Adresse' => $this->Adresse,
            'Mdp' => $this->Mdp,
            'Role' => $this->Role
        ));
        return 1;
    }
}

