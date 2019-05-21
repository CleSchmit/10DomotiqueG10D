<?php
include_once 'model/function.php';
include_once 'model/ajoutcapteur.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Nom']) AND isset($_POST['Model']))
{
    $capteur = new ajoutcapteur($_POST['Nom'], $_POST['Model'], $_GET['id']);
    if($capteur->enregistrement()){
        header("Location:index.php?action=Profil#".$_GET['Maison']."");
    } else { /*Erreur lors de l'enregistrement*/
        echo 'Une erreur est survenue';
    }
}