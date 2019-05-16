<?php session_start();
ob_start();

include_once 'controller/ControlModifAdmin.php';

$Prenom = $_SESSION['profil'][$_GET['i']][1];
$Email = $_SESSION['profil'][$_GET['i']][2];
$Tel = $_SESSION['profil'][$_GET['i']][3];
$Nom = $_SESSION['profil'][$_GET['i']][0];
$Adresse = $_SESSION['profil'][$_GET['i']][5];
$Validation = $_SESSION['profil'][$_GET['i']][8];

$body="
<br>

<div id=\"Cforum\" class=\"Modif\">
        <h1>Modification du Profil :</h1>
        <form  method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Prenom&i=".$_GET['i']."\">
        <input name=\"Prenom\" type=\"Text\" placeholder=\"$Prenom\" />
        <input type=\"submit\" value=\"Modifier le prénom\" /><br>
        $erreurPrenom<br>
        </form>
        
        
        <form method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Nom&i=".$_GET['i']."\">
        <input name=\"Nom\" type=\"Text\" placeholder=\"$Nom\" />
        <input type=\"submit\" value=\"Modifier le nom\" /><br>
        $erreurNom<br>
        </form>
        
        /!\ Si vous modifiez votre Email, vous serez redirigez vers la page de connexion
        <form method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Email&i=".$_GET['i']."\">
        <input name=\"Email\" type=\"Text\" placeholder=\"$Email\" />
        <input type=\"submit\" value=\"Modifier l'Email\" /><br>
        $erreurEmail<br>
        </form>
        
        
        <form method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Tel&i=".$_GET['i']."\">
        <input name=\"Tel\" type=\"Text\" placeholder=\"+33 $Tel\" />
        <input type=\"submit\" value=\"Modifier le téléphone\" /><br>
        $erreurTel<br>
        </form>
        
        <form method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Adresse&i=".$_GET['i']."\">
        <input name=\"Adresse\" type=\"Text\" placeholder=\" $Adresse\" />
        <input type=\"submit\" value=\"Modifier l'Adresse\" /><br>
        $erreurAdresse<br>
        </form>
        
        
        <form method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Validation&i=".$_GET['i']."\">
        <input name=\"Validation\" type=\"Text\" placeholder=\" Tapez ok pour valider le compte\" />
        <input type=\"submit\" value=\"Validé ce compte\" /><br>
        </form>
                <br>

        
        <a href='index.php?action=ListeProfil' class='bouton'>&emsp;Retourner sur la liste&emsp;</a>
        <br>


        <br>

</div><br>";

require("template/template.php"); ?>