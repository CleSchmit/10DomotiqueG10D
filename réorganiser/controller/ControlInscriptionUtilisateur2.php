<?php
include_once 'model/function.php';
include_once 'model/inscriptionutilisateur.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Prenom']) AND isset($_POST['Nom']) AND isset($_POST['Email']) AND isset($_POST['Mdp'])  AND isset($_POST['Mdp2']) AND isset($_POST['Tel']) AND isset($_POST['Naissance'])){

    $inscription = new inscription($_POST['Prenom'],$_POST['Nom'],$_POST['Email'],$_POST['Mdp'],$_POST['Mdp2'],$_POST['Tel'],$_POST['Naissance']);
    $verif = $inscription->verif();
    if($verif == "ok"){/*Tout est bon*/
        if($inscription->enregistrement()){
            header('Location: index_cn.php?action=ProfilAdmin#ListeProfil');
        }
        else{ /*Erreur lors de l'enregistrement*/
            echo '发生了错误';
        }
    } else {
        $erreur = $verif;
    }

}
