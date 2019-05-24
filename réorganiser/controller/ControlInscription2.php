<?php
include_once 'model/function.php';
include_once 'model/inscription.class.php';
include('conf.php');
$bdd = bdd();
$erreur = NULL;

if(isset($_POST['Prenom']) AND isset($_POST['Nom']) AND isset($_POST['Email']) AND isset($_POST['Mdp'])  AND isset($_POST['Mdp2']) AND isset($_POST['Tel']) AND isset($_POST['Naissance'])){
    
    $inscription = new inscription($_POST['Prenom'],$_POST['Nom'],$_POST['Email'],$_POST['Mdp'],$_POST['Mdp2'],$_POST['Tel'],$_POST['Naissance']);
    $verif = $inscription->verif();
    if($verif == "ok"){/*Tout est bon*/
        if($inscription->enregistrement()){
			
            // RÃ©cupÃ©ration des variables et sÃ©curisation des donnÃ©es
            $objet = "Creation d'un compte 10Domotique";
            $message = "Bonjour Madame, Monsieur ".$_POST['Nom']." ".$_POST['Prenom']." votre compte a bien été crée";
            
            // Variables concernant l'email
            
            $destinataire = $_POST['Email']; // Adresse email du webmaster (Ã  personnaliser)
            $contenu = '<html><head><title> '.$objet.' </title></head><body>';
            $contenu .= '<p>'.$message.'</p>';
            $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
            
            // Pour envoyer un email HTML, l'en-tÃªte Content-type doit Ãªtre dÃ©fini
            $de = "Support 10domotoque";
            $headers = "From :'$de' "."\n";
            $headers .= 'Reply-To : '.$mail_admin."\n";
            $headers .= 'MIME-Version: 1.0'."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
            
            $mail = $_POST['Email'];
            $numtel = $_POST['Tel'];
            $date_de_naissance = $_POST['Naissance'];
            $contenu = '<html><head><title> '.$objet.' </title></head><body>';
            $contenu .= '<p>Nouvelle inscription</p>';
            $contenu .= '<p><strong>Email</strong> :'.$_POST['Prenom'].' '.$_POST['Nom'].'</p>';
            $contenu .= '<p><strong>Email </strong>: '.$mail.'</p>';
            $contenu .= '<p><strong>Numero de telephone</strong>: '.$numtel.'</p>';
            $contenu .= '<p><strong>Date de naissance</strong>: '.$date_de_naissance.'</p>';
            $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
            $de = "Support 10domotoque";
            
            $headers .= 'MIME-Version: 1.0'."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            
            mail($mail_admin, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
            //mail($mail_admin2, $objet, $contenu, $headers);
            
            header('Location: index.php?action=Connexion');
        }
        else{ /*Erreur lors de l'enregistrement*/
            echo 'Une erreur est survenue';
        }
    } else {
        $erreur = $verif;
    }
    
}
