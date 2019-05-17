<?php
include_once 'model/function.php';
include_once 'model/connexion.class.php';
$bdd = bdd();
$erreur = NULL;


if(isset($_POST['Email']) AND isset($_POST['Mdp'])) {
    $connexion = new connexion($_POST['Email'], $_POST['Mdp']);
    $verif = $connexion->verif();
    if ($verif == "Admin") {
        if ($connexion->session()) {
            header('Location: index.php?action=ProfilAdmin');
        }
    } else if ($verif == "Gestionnaire") {
        if ($connexion->session()) {
            header('Location: index.php?action=ProfilGestion');
        }
    } else if ($verif == "ok") {
        if ($connexion->session()) {
            header('Location: index.php?action=Profil#Maison0');
        }
    } else {
        $erreur=$verif;
    }
}

if(isset($_SESSION['Email']) AND isset($_SESSION['Mdp'])){
    if($_SESSION['Role'] == 'Admin'){
        header('Location: index.php?action=ProfilAdmin');
    } else if($_SESSION['Role'] == 'Gestionnaire'){
        header('Location: index.php?action=ProfilGestion');
    } else {
        header('Location: index.php?action=Profil#Maison0');
    }
}
