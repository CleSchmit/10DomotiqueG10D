<?php
include_once 'model/function.php';
include_once 'model/suppCapteur.php';

$bdd = bdd();
$erreur = NULL;

if(isset($_POST['MdpCapteur']) AND  password_verify($_POST['MdpCapteur'],$_SESSION['Mdp'])) {
    $suppCapteur = new suppCapteur($_GET['id']);
    if ($suppCapteur->suppression()) {
        header("Location: index_cn.php?action=Profil#".$_GET['Maison']."");
    }
}
