<?php include_once 'function.php';

class connexion{

    private $Email;
    private $Mdp;
    private $bdd;


    public function __construct($Email,$Mdp) {
        $this->Email = $Email;
        $this->Mdp = $Mdp;
        $this->bdd = bdd();
    }

    public function verif(){

        $requete = $this->bdd->prepare('SELECT * FROM profil WHERE Email = :Email');
        $requete->execute(array('Email'=> $this->Email));
        $reponse = $requete->fetch();
        if($reponse){
            if(password_verify($this->Mdp,$reponse['Mdp'])){
                if('ok' == $reponse['Validation']) {
                    if ('Admin' == $reponse['Role']) {
                        return 'Admin';
                    } else if ('Gestionnaire' == $reponse['Role']) {
                        return 'Gestionnaire';
                    } else {
                        return 'ok';
                    }
                } else {
                    $erreur = "Compte non validé par l'administrateur";
                    return $erreur;
                }
            } else {
                $erreur = 'Le mot de passe est incorrect';
                return $erreur;
            }
        } else {
            $erreur = 'Email inéxistant';
            return $erreur;
        }
    }

    public function session(){
        $requete = $this->bdd->prepare('SELECT * FROM profil WHERE Email = :Email ');
        $requete->execute(array(
            'Email' => $this->Email));
        $response = $requete->fetch();
        $_SESSION['id']=$response['Id_Profil'];
        $_SESSION['Prenom'] = $response['Prenom'];
        $_SESSION['Nom'] = $response['Nom'];
        $_SESSION['Tel'] = $response['Tel'];
        $_SESSION['Naissance'] = $response['DateNaissance'];
        $_SESSION['Email'] = $this->Email;
        $_SESSION['Mdp'] = $response['Mdp'];
        $_SESSION['Role'] = $response['Role'];
        $_SESSION['Adresse'] = $response['Adresse'];
        $_SESSION['Validation'] = $response['Validation'];

        return 1;
    }


}