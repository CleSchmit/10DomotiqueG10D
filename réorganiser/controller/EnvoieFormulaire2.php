<?php
include('conf.php');
// S'il y des données de postées
if (isset($_POST['objet']) AND isset($_POST['message'])) {
    
    // (1) Code PHP pour traiter l'envoi de l'email
    
    // Récupération des variables et sécurisation des données
    $objet = htmlentities($_POST['objet'])."";
    if(isset($_SESSION['Email'])){
        $mail = $_SESSION['Email'];
    }else{
        $mail = htmlentities($_POST['mail']);
    }
    $message = htmlentities($_POST['message']);
    
    // Variables concernant l'email
    
    $contenu = '<html><head><title> '.$objet.' </title></head><body>';
    $contenu .= '<p>'.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
    
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $de = "Support 10domotoque";
    $headers = "From :'$de' "."\n";
    $headers .= 'Reply-To : '.$mail."\n";
    $headers .= 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
    // Envoyer l'email
    mail($mail_admin, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
    //mail($mail_admin2, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
    header('Location: index.php?action=Accueil');       // Afficher un message pour indiquer que le message a été envoyé
    // (2) Fin du code pour traiter l'envoi de l'email
}
?>
