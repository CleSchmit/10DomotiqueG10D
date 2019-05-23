<?php
include_once 'model/message.php';
include_once 'model/function.php';

if (isset($_SESSION['id_conv']) AND isset($_POST['message']) AND isset($_SESSION['Prenom'])){
    $message = new message($_SESSION['id_conv'], $_SESSION['Nom']. " ".$_SESSION['Prenom'], $_POST['message']);
    
    if($message->enregistrement()){
        header("Location: index.php?action=forum");
    } else { /*Erreur lors de l'enregistrement*/
        echo 'Une erreur est survenue';
    }
}
if(isset($_GET['id']) AND isset($_SESSION['Nom'])){
    $bdd = bdd();
    $messages = $bdd->query('SELECT * FROM messages WHERE id= \'' . $_GET['id'] . '\'');
    $message = $messages->fetch();
    if($_SESSION['Role'] == 'Admin' OR $message['utilisateur'] == $_SESSION['Nom']. " ".$_SESSION['Prenom']){
        $message = new message(1, $_SESSION['Nom']. " ".$_SESSION['Prenom'], "supprimer");
        
        if($message->supprimer($_GET['id'])){
            header("Location: index.php?action=forum");
        } else { /*Erreur lors de l'enregistrement*/
            echo 'Une erreur est survenue';
        }
    }
}

?>