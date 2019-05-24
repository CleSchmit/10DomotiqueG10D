<?php
include_once 'model/function.php';
include_once 'model/inscription.class.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Email']) AND isset($_POST['Mdp'])  AND isset($_POST['Mdp2'])){

    $inscription = new inscription($_POST['Prenom'],$_POST['Nom'],$_POST['Email'],$_POST['Mdp'],$_POST['Mdp2'],$_POST['Tel'],$_POST['Naissance']);
    $verif = $inscription->verif();
    if($verif == "ok"){/*Tout est bon*/
        if($inscription->enregistrement()){
                header('Location: index_cn.php?action=Connexion');
        }
        else{ /*Erreur lors de l'enregistrement*/
            echo '发生了错误';
        }
    } else {
        $erreur = $verif;
    }

}
