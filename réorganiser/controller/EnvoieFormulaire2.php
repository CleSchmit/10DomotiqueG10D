<?php


    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {

      // (1) Code PHP pour traiter l'envoi de l'email

      // Récupération des variables et sécurisation des données
      $objet = htmlentities($_POST['objet']);
      $mail = htmlentities($_POST['mail']);
      $message = htmlentities($_POST['message']);

      // Variables concernant l'email

      $destinataire = 'beau.mec.ol@hotmail.fr'; // Adresse email du webmaster (à personnaliser)
      $contenu = '<html><head><title> '.$objet.' </title></head><body>';
      $contenu .= '<p>你有一条新的消息 !</p>';
      $contenu .= '<p><strong>邮箱</strong>: '.$mail.'</p>';
      $contenu .= '<p><strong>消息</strong>: '.$message.'</p>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
      // Envoyer l'email
      mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
	  header('Location: index_cn.php?action=Accueil');       // Afficher un message pour indiquer que le message a été envoyé
      // (2) Fin du code pour traiter l'envoi de l'email
    }
    ?>
