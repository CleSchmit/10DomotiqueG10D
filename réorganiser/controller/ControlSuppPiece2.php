<?php
include_once 'model/function.php';
include_once 'model/suppPiece.php';

$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Mdp']) AND $_POST['Mdp']==$Mdp) {
    $suppPiece = new suppPiece($Id_Piece);
    if ($suppPiece->suppression()) {
        header("Location: index_cn.php?action=Profil#".$Id_Maison."");
    }
}
