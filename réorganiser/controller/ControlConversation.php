<?php

include_once 'model/conversation.php';
include_once 'model/function.php';

if (isset($_POST['nomNouvelConv'])){
    $conv = new conversation($_POST['nomNouvelConv']);
    $bdd = bdd();
    $conversation = $bdd->query('SELECT nom FROM conversation');
    $creerConv = true;
    while ($nom = $conversation->fetch()) {
        if($nom['nom'] == $_POST['nomNouvelConv']){
            $creerConv = false;
        }
    }
    if( $creerConv){
        if($conv->enregistrement()){
            header("Location: index.php?action=forum");
        } else { /*Erreur lors de l'enregistrement*/
            echo 'Une erreur est survenue';
        }
    }
           
}
if(isset($_SESSION['Role']) AND isset($_SESSION['id_conv']) AND isset($_GET['conv'])){
    if($_SESSION['Role'] == 'Admin' AND $_GET['conv'] == 'sup'){
        $conv = new conversation($_GET['conv']);
        if($conv->supprimer()){
            header("Location: index.php?action=forum");
        } else { /*Erreur lors de l'enregistrement*/
            echo 'Une erreur est survenue';
        }
    }
}

