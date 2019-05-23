<?php
include_once 'model/function.php';
include_once 'model/profilmodifadmin.php';
$bdd = bdd();
$erreur = NULL;
$erreurPrenom = NULL;
$erreurNom = NULL;
$erreurEmail = NULL;
$erreurTel = NULL;
$erreurAdresse = NULL;
$erreurMdp = NULL;
$verif = NULL;
$donnee = NULL;

if(isset($_GET["modif"])) {

    $element = htmlspecialchars($_GET["modif"]);

    if ($element == 'Prenom') {
        $modif = new modif($_POST['Prenom'], 'Prenom');
        $verif = $modif->verif();
    }
    if ($element == 'Nom') {
        $modif = new modif($_POST['Nom'], 'Nom');
        $verif = $modif->verif();
    }

    if ($element == 'Email') {
        $modif = new modif($_POST['Email'], 'Email');
        $verif = $modif->verif();
    }

    if ($element == 'Tel') {
        $modif = new modif($_POST['Tel'], 'Tel');
        $verif = $modif->verif();
    }

    if ($element == 'Adresse') {
        $modif = new modif($_POST['Adresse'], 'Adresse');
        $verif = $modif->verif();
    }

    if ($element == 'Mdp') {
        if (strlen($_POST['Mdp']) != 0 AND strlen($_POST['Mdp2']) != 0){
            if ($_POST['Mdp'] == $_POST['Mdp2']){
                $modif = new modif($_POST['Mdp'], 'Mdp');
                $verif = $modif->verif();
            }else{
                $verif = 'Les mots de passe doivent être les mêmes';
            }
        }else{
            $verif = 'Vous devez remplir les deux champs';
        }

    }

    if ($element == 'Validation') {
        $modif = new modif('ok', 'Validation');
        $verif = $modif->verif();
    }

    if ($verif == "ok") {/*Tout est bon*/
        if ($modif->enregistrement()) {
           header("Location: index.php?action=ProfilAdmin#ListeProfil");
        } else { /*Erreur lors de l'enregistrement*/
            echo 'Une erreur est survenue';
        }
    } else {
        if ($element == 'Prenom') {
            $erreurPrenom = $verif;
        }
        if ($element == 'Nom') {
            $erreurNom = $verif;
        }

        if ($element == 'Email') {
            $erreurEmail = $verif;
        }

        if ($element == 'Tel') {
            $erreurTel = $verif;
        }

        if($element == 'Mdp'){
            $erreurMdp = $verif;
        }
    }


}