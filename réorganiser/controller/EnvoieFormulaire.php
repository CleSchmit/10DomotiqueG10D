<?php


    // S'il y des données de postées
if (isset($_POST['objet']) AND isset($_POST['message'])) {
    
      // (1) Code PHP pour traiter l'envoi de l'email
    
      // Récupération des variables et sécurisation des données
      $objet = htmlentities($_POST['objet']);
      if(isset($_SESSION['Email'])){
          $mail = $_SESSION['Email'];
      }else{
          $mail = htmlentities($_POST['mail']);
      }
      $message = htmlentities($_POST['message']);
    
      // Variables concernant l'email
    
      $destinataire = 'beau.mec.ol@hotmail.fr'; // Adresse email du webmaster (à personnaliser)
      $contenu = '<html><head><title> '.$objet.' </title></head><body>';
      $contenu .= '<p>Tu as un nouveau message !</p>';
      $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
      $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
    
      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
      // Envoyer l'email
      mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
      header('Location: index.php?action=Accueil');
}
?>


