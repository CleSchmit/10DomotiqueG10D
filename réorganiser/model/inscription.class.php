<?php
include_once 'function.php'; 


class inscription{
    
   private $Prenom;
   private $Nom;
   private $Email;
   private $Tel;
   private $Role;
   private $Naissance;
   private $Mdp;
   private $Mdp2;
   private $bdd;
    
    public function __construct($Prenom,$Nom,$Email,$Mdp,$Mdp2,$Tel,$Naissance){
        
        
        $Prenom = htmlspecialchars($Prenom);
        $Email = htmlspecialchars($Email);
        
        $this->Prenom = $Prenom;
        $this->Nom = $Nom;
        $this->Email = $Email;
        $this->Tel = $Tel;
        $this->Naissance = $Naissance;
        $this->Mdp = $Mdp;
        $this->Mdp2 = $Mdp2;
        $this->Role = "Utilisateur";
        $this->bdd = bdd();
        
        
    }
    
    public function verif()
    {

        $requete = $this->bdd->prepare('SELECT Email FROM profil');
        $requete->execute();
        while ($row = $requete->fetch()) {
            if ($this->Email == $row['Email']) {
                return 'Email déjà utilisé';
            }
        }

        $syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';

        if (preg_match($syntaxe, $this->Email)) { /*Email bon*/
            if (strlen($this->Mdp) > 5) { /*Si le mot de passe à le bon format*/
                if ($this->Mdp == $this->Mdp2) {/*Deux mots de passe bon*/
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
    
    
    public function enregistrement(){

        $this->Mdp = password_hash($this->Mdp, PASSWORD_DEFAULT);

        $req = $this->bdd->prepare('INSERT INTO profil(Prenom,Nom,Email,Tel,DateNaissance,Mdp,Role) VALUES (:Prenom,:Nom,:Email,:Tel,:Naissance,:Mdp,:Role)');
        $req->execute(array(
           'Prenom' => $this->Prenom,
            'Nom' => $this->Nom,
            'Email' => $this->Email,
            'Tel' => $this->Tel,
            'Naissance' => $this->Naissance,
            'Mdp' => $this->Mdp,
            'Role' => $this->Role
        ));
        return 1; 
       
    }
}

