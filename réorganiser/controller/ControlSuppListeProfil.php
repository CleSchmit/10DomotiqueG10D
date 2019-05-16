<?php
include_once 'model/function.php';
include_once 'model/supplisteprofil.php';

$bdd = bdd();
$erreur = NULL;
if(isset($_POST['Mdp']) AND password_verify($_POST['Mdp'],$Mdp)) {
    $supplisteprofil = new supplisteprofil($Nom);
    if ($supplisteprofil->suppression()) {
        header("Location: index.php?action=ListeProfil");
    }
}




