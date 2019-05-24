<?php
include_once 'model/function.php';
include_once 'model/supplistecapteur.php';

$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Mdp']) AND password_verify($_POST['Mdp'],$Mdp)) {
    $supplistecapteur = new supplistecapteur($Nom);
    if ($supplistecapteur->suppression()) {
        header("Location: index_cn.php?action=ProfilAdmin#ListeCapteur");
    }
}
