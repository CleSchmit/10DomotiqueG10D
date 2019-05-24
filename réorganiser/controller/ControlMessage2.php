<?php
include_once 'model/message.php';
include_once 'model/function.php';

if (isset($_SESSION['id_conv']) AND isset($_POST['message']) AND isset($_SESSION['Prenom'])){
    $message = new message($_SESSION['id_conv'], $_SESSION['Nom']. " ".$_SESSION['Prenom'], $_POST['message']);

    if($message->enregistrement()){
        header("Location: index_cn.php?action=forum");
    } else { /*Erreur lors de l'enregistrement*/
        echo '发生了错误';
    }
}

?>
