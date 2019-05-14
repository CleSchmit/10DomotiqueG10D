<?php
include_once 'model/function.php';
include_once 'model/suppCapteur.php';

$bdd = bdd();
$erreur = NULL;

if(isset($_POST['MdpCapteur']) AND $_POST['MdpCapteur']==$_SESSION['Mdp']) {
    $suppCapteur = new suppCapteur($_GET['id']);
    if ($suppCapteur->suppression()) {
        header("Location: index.php?action=Profil#".$_GET['Maison']."");
    }
}




