<?php
include_once 'model/function.php';
include_once 'model/suppCapteur.php';

$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Mdp']) AND $_POST['Mdp']==$Mdp) {
    $suppCapteur = new suppCapteur($Id_Capteur);
    if ($suppCapteur->suppression()) {
        header("Location: index.php?action=Profil#".$Id_Maison."");
    }
}




