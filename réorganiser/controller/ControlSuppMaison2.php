<?php
include_once 'model/function.php';
include_once 'model/suppMaison.php';

$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Mdp']) AND $_POST['Mdp']==$Mdp) {
    $suppMaison = new suppMaison($Id_Maison);
    if ($suppMaison->suppression()) {
        header('Location: index_cn.php?action=Profil');
    }
}
