<?php
include_once 'model/function.php';
include_once 'model/supp.php';

$bdd = bdd();
$erreur = NULL;

$supp = new supp($Email);
if($supp->suppression()){
    header('Location: index.php?action=Profil#Maison0');
} else { /*Erreur lors de l'enregistrement*/
    echo 'Une erreur est survenue';
}


