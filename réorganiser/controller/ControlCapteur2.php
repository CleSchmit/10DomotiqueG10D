<?php
include_once 'model/function.php';
include_once 'model/capteur.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Nom']) AND isset($_POST['Model']))
{
    $capteur = new capteur($_POST['Nom'], $_POST['Model'], $_GET['id']);
    if($capteur->enregistrement()){
        header("Location:index_cn.php?action=Profil#".$_GET['Maison']."");
    } else { /*Erreur lors de l'enregistrement*/
        echo '发生了错误';
    }
}
