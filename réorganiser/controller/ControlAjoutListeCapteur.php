<?php
include_once 'model/function.php';
include_once 'model/ajoutlistecapteur.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Nom']) AND isset($_POST['Prix']) AND isset($_POST['Consommation']))
{
    $ajoutlistecapteur = new ajoutlistecapteur($_POST['Nom'], $_POST['Prix'], $_POST['Consommation']);
    if($ajoutlistecapteur->enregistrement()){
        header("Location:index.php?action=ProfilAdmin#ListeCapteur");
    } else { /*Erreur lors de l'enregistrement*/
        echo 'Une erreur est survenue';
    }
}