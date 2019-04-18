<?php session_start();
ob_start();

include_once 'controller/ControlModif.php';

$Prenom = $_SESSION['Prenom'];
$Email = $_SESSION['Email'];
$Tel = $_SESSION['Tel'];
$Nom = $_SESSION['Nom'];

$body="
<br>

<div id=\"CProfil\" class=\"Modif\">
        <h1>Modification de votre Profil :</h1>
        <form  method=\"post\" action=\"index.php?action=ProfilModif&modif=Prenom\">
        <input name=\"Prenom\" type=\"Text\" placeholder=\"$Prenom\" />
        <input type=\"submit\" value=\"Modifier mon prénom\" /><br>
        $erreurPrenom<br>
        </form>
        
        
        <form method=\"post\" action=\"index.php?action=ProfilModif&modif=Nom\">
        <input name=\"Nom\" type=\"Text\" placeholder=\"$Nom\" />
        <input type=\"submit\" value=\"Modifier mon nom\" /><br>
        $erreurNom<br>
        </form>
        
        /!\ Si vous modifiez votre Email, vous serez redirigez vers la page de connexion
        <form method=\"post\" action=\"index.php?action=ProfilModif&modif=Email\">
        <input name=\"Email\" type=\"Text\" placeholder=\"$Email\" />
        <input type=\"submit\" value=\"Modifier mon Email\" /><br>
        $erreurEmail<br>
        </form>
        
        
        <form method=\"post\" action=\"index.php?action=ProfilModif&modif=Tel\">
        <input name=\"Tel\" type=\"Text\" placeholder=\"+33 $Tel\" />
        <input type=\"submit\" value=\"Modifier mon téléphone\" /><br>
        $erreurTel<br>
        </form>
        
        
        <form method=\"post\" action=\"index.php?action=ProfilModif&modif=Mdp\">
        <input name=\"Mdp\" type=\"password\" placeholder=\" Nouveau mot de passe\" />
        <input name=\"Mdp2\" type=\"password\" placeholder=\" Confirmation\" />
        <input type=\"submit\" value=\"Modifier mon mot de passe\" /><br>
        $erreurMdp<br>
        </form>
        
        <a href='index.php?action=Profil#Maison0' class='retProfil'>&emsp;Retourner sur mon profil&emsp;</a>
        <br>


        <br>

</div><br>";

require("template/template.php"); ?>