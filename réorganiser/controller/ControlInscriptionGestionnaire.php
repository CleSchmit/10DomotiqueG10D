<?php
include_once 'model/function.php';
include_once 'model/inscriptiongestionnaire.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Email']) AND isset($_POST['Mdp'])  AND isset($_POST['Mdp2']) AND isset($_POST['Adresse'])){

    $inscription = new inscriptiongestionnaire($_POST['Email'],$_POST['Mdp'],$_POST['Mdp2'],$_POST['Adresse']);
    $verif = $inscription->verif();
    if($verif == "ok"){/*Tout est bon*/
        if($inscription->enregistrement()){
            header("Location: index.php?action=ProfilAdmin");
        }
        else{ /*Erreur lors de l'enregistrement*/
            echo 'Une erreur est survenue';
        }
    } else {
        $erreur = $verif;
    }
}