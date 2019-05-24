<?php
include_once 'model/function.php';
include_once 'model/inscriptionadmin.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Prenom']) AND isset($_POST['Nom']) AND isset($_POST['Email']) AND isset($_POST['Mdp'])  AND isset($_POST['Mdp2']))
{
    $inscription = new inscriptionadmin($_POST['Prenom'],$_POST['Nom'],$_POST['Email'],$_POST['Mdp'],$_POST['Mdp2']);
    $verif = $inscription->verif();
    if($verif == "ok") {
        if ($inscription->enregistrement()) {
            header("Location: index_cn.php?action=ProfilAdmin#ListeProfil");
        } else { /*Erreur lors de l'enregistrement*/
            echo '发生了错误';
        }
    }
}
