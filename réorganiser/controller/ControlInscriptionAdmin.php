<?php
include_once 'model/function.php';
include_once 'model/inscriptionadmin.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Prenom']) AND isset($_POST['Nom']) AND isset($_POST['Mdp'])  AND isset($_POST['Mdp2']))
{
    $inscription = new inscriptionadmin($_POST['Prenom'],$_POST['Nom'],$_POST['Mdp'],$_POST['Mdp2']);
    if($inscription->enregistrement()){
        header("Location: index.php?action=ProfilAdmin");
    }
    else{ /*Erreur lors de l'enregistrement*/
        echo 'Une erreur est survenue';
    }
}