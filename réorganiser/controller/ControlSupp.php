<?php
include_once 'model/function.php';
include_once 'model/supp.php';

$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Mdp'])) {
    $supp = new supp($Email);
    if ($supp->suppression()) {
        header('Location: index.php?action=Connexion');
    }
}





