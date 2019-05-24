<?php


require "controller/controller.php";

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]);
    seeView($action);
 
} else {
	 
	$objet = 'Connexion';
	$mail_admin = 'olivier.laffisse@gmail.com'; // Adresse email du webmaster (à personnaliser)
    $contenu = '<html><head><title> '.$objet.' </title></head><body>';
    $contenu .= '<p><strong>ip </strong> :'.$_SERVER["REMOTE_ADDR"].'</p></br>';
    $contenu .= '<p><strong>Lieux </strong> :'.$_SERVER["HTTP_X_FORWARDED_FOR"].'</p></br>';
    $contenu .= '<p><strong>Langue </strong> :'.$_SERVER["HTTP_ACCEPT_LANGUAGE"].'</p></br>';
    $contenu .= '<p><strong>Page precedente </strong> :'.$_SERVER["HTTP_REFERER"].'</p></br>';
    $contenu .= '<p><strong>Nb page lu </strong> :'.$_SERVER["REQUEST_URI"].'</p></br>';
    $contenu .= '<p><strong>Navigateur </strong> :'.$_SERVER['HTTP_USER_AGENT'].'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
    
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers .= 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
    // Envoyer l'email
    mail($mail_admin, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
    seeView("Accueil");
}
