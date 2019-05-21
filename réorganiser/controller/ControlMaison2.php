<?php
include_once 'model/function.php';
include_once 'model/maison.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Nom']) AND isset($_POST['Adresse']) AND isset($_POST['Superficie']) AND isset($_POST['NbPieces'])  AND isset($_POST['NbHabitant']))
{
    $maison = new maison($_POST['Nom'], $_POST['Adresse'], $_POST['Superficie'], $_POST['NbPieces'], $_POST['NbHabitant']);
    if($maison->enregistrement()){
        header('Location: index_cn.php?action=Profil');
    } else { /*Erreur lors de l'enregistrement*/
        echo '发生了错误';
    }
}
