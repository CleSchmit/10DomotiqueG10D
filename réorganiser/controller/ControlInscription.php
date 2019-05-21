<?php
include_once 'model/function.php';
include_once 'model/inscription.class.php';
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Prenom']) AND isset($_POST['Nom']) AND isset($_POST['Email']) AND isset($_POST['Mdp'])  AND isset($_POST['Mdp2']) AND isset($_POST['Tel']) AND isset($_POST['Naissance'])){

    $inscription = new inscription($_POST['Prenom'],$_POST['Nom'],$_POST['Email'],$_POST['Mdp'],$_POST['Mdp2'],$_POST['Tel'],$_POST['Naissance']);
    $verif = $inscription->verif();
    if($verif == "ok"){/*Tout est bon*/
        if($inscription->enregistrement()){
            // Récupération des variables et sécurisation des données
            $objet = "Creation d'un compte 10Domotique";
            $message = "Bonjour Madame, Monsieur ".$_POST['Nom']." ".$_POST['Prenom']." votre compte a bien �t� cr�e";
            
            // Variables concernant l'email
            
            $destinataire = $_POST['Email']; // Adresse email du webmaster (à personnaliser)
            $contenu = '<html><head><title> '.$objet.' </title></head><body>';
            $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
            $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
            
            // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
            $headers = 'MIME-Version: 1.0'."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
            
            $objet = "Creation d'un compte 10Domotique";
            $message = "Madame, Monsieur ".$_POST['Nom']." ".$_POST['Prenom']." viens de creer un compte";
            
            $destinataire = 'beau.mec.ol@hotmail.fr'; // Adresse email du webmaster (à personnaliser)
            $mail = $_POST['Email'];
            $numtel = $_POST['Tel'];
            $date_de_naissance = $_POST['Naissance'];
            $contenu = '<html><head><title> '.$objet.' </title></head><body>';
            $contenu .= '<p>Nouvelle inscription</p>';
            $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
            $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
            $contenu .= '<p><strong>Numero de telephone</strong>: '.$numtel.'</p>';
            $contenu .= '<p><strong>Date de naissance</strong>: '.$date_de_naissance.'</p>';
            $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
            
            mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
            
            header('Location: index.php?action=Connexion');
        }
        else{ /*Erreur lors de l'enregistrement*/
            echo 'Une erreur est survenue';
        }
    } else {
        $erreur = $verif;
    }

}