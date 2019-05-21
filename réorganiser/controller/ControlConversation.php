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

?>