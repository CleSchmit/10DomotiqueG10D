<?php
include_once 'model/function.php';
include_once 'model/ajoutlistecapteur.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Nom']) AND isset($_POST['Prix']) AND isset($_POST['Consommation']) AND isset($_POST['Model']))
{
    $ajoutlistecapteur = new ajoutlistecapteur($_POST['Nom'], $_POST['Prix'], $_POST['Consommation'], $_POST['Model']);
    if($ajoutlistecapteur->enregistrement()){
        header("Location:index.php?action=ProfilAdmin#ListeCapteur");
    } else { /*Erreur lors de l'enregistrement*/
        echo '发生了错误';
    }
}
