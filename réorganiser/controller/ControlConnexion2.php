<?php
include_once 'model/function.php';
include_once 'model/connexion2.class.php';
$bdd = bdd();
$erreur = NULL;


if(isset($_POST['Email']) AND isset($_POST['Mdp'])) {
    $connexion = new connexion($_POST['Email'], $_POST['Mdp']);
    $verif = $connexion->verif();
    if ($verif == "Admin") {
        if ($connexion->session()) {
            header('Location: index_cn.php?action=ProfilAdmin#ListeCapteur');
        }
    } else if ($verif == "Gestionnaire") {
        if ($connexion->session()) {
            header('Location: index_cn.php?action=ProfilGestion');
        }
    } else if ($verif == "ok") {
        if ($connexion->session()) {
            header('Location: index_cn.php?action=Profil#Maison0');
        }
    } else {
        $erreur=$verif;
    }
}

if(isset($_SESSION['Email']) AND isset($_SESSION['Mdp'])){
    if($_SESSION['Role'] == 'Admin'){
        header('Location: index_cn.php?action=ProfilAdmin#ListeCapteur');
    } else if($_SESSION['Role'] == 'Gestionnaire'){
        header('Location: index_cn.php?action=ProfilGestion');
    } else {
        header('Location: index_cn.php?action=Profil#Maison0');
    }
}
