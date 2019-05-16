<?php
include_once 'model/function.php';
include_once 'model/supplistecapteur.php';

$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Mdp']) AND $_POST['Mdp']==$Mdp) {
    $supplistecapteur = new supplistecapteur($Nom);
    if ($supplistecapteur->suppression()) {
        header("Location: index.php?action=ListeCapteur");
    }
}




