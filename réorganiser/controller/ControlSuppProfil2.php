<?php
include_once 'model/function.php';
include_once 'model/suppProfil.php';

$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Mdp']) AND password_verify($_POST['Mdp'],$Mdp)) {
    $supp = new suppProfil($Id_Profil);
    if ($supp->suppression()) {
        session_unset();
        session_destroy();
        header('Location: index_cn.php?action=Connexion');
    }
}
