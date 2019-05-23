<?php
include_once 'model/function.php';
include_once 'model/piece.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Nom']) AND isset($_POST['Superficie']))
{
    $piece = new piece($_POST['Nom'], $_POST['Superficie'],$_GET['id']);
    if($piece->enregistrement()){
        header("Location:index.php?action=Profil#".$_GET['Maison']."");
    } else { /*Erreur lors de l'enregistrement*/
        echo 'Une erreur est survenue';
    }
}