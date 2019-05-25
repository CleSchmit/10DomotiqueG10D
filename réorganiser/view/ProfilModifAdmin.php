<?php session_start();
ob_start();

include_once 'controller/ControlModifAdmin.php';

$Prenom = $_SESSION['profil'][$_GET['i']][1];
$Email = $_SESSION['profil'][$_GET['i']][2];
$Tel = $_SESSION['profil'][$_GET['i']][3];
$Nom = $_SESSION['profil'][$_GET['i']][0];
$Adresse = $_SESSION['profil'][$_GET['i']][6];

$val = '';
if ($_SESSION['profil'][$_GET['i']][9] == NULL){
    $val = "<form method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Validation&i=".$_GET['i']."\">
        <input name='Validation' type=\"submit\" style='background-color: lightcoral' value=\"Valider l'inscription\" /><br>
        </form>";
}

$body="
<br>

<div id=\"Cforum\" class=\"Modif\">
        <h1>Modification de votre Profil :</h1>
        <form  method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Prenom&i=".$_GET['i']."\">
        <input name=\"Prenom\" type=\"Text\" placeholder=\"$Prenom\" />
        <input type=\"submit\" value=\"Modifier mon prénom\" /><br>
        $erreurPrenom<br>
        </form>
        
        
        <form method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Nom&i=".$_GET['i']."\">
        <input name=\"Nom\" type=\"Text\" placeholder=\"$Nom\" />
        <input type=\"submit\" value=\"Modifier mon nom\" /><br>
        $erreurNom<br>
        </form>
        
        /!\ Si vous modifiez votre Email, vous serez redirigez vers la page de connexion
        <form method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Email&i=".$_GET['i']."\">
        <input name=\"Email\" type=\"Text\" placeholder=\"$Email\" />
        <input type=\"submit\" value=\"Modifier mon Email\" /><br>
        $erreurEmail<br>
        </form>
        
        
        <form method=\"post\" action=\"index.php?action=ProfilModifAdmin&modif=Tel&i=".$_GET['i']."\">
        <input name=\"Tel\" type=\"Text\" placeholder=\"+33 $Tel\" />
        <input type=\"submit\" value=\"Modifier mon téléphone\" /><br>
        $erreurTel<br>
        </form>
        
        <form method=\"post\" action=\"index.php?action = ProfilModifAdmin&modif=Adresse&i=".$_GET['i']."\">
        <input name=\"Tel\" type=\"Text\" placeholder=\" $Adresse\" />
        <input type=\"submit\" value=\"Modifier mon Adresse\" /><br>
        $erreurAdresse<br>
        </form>
        
        
        <form method=\"post\" action=\"index.php?action=ProfilModif&modif=Mdp&i=".$_GET['i']."\">
        <input name=\"Mdp\" type=\"password\" placeholder=\" Nouveau mot de passe\" />
        <input name=\"Mdp2\" type=\"password\" placeholder=\" Confirmation\" />
        <input type=\"submit\" value=\"Modifier mon mot de passe\" /><br>
        $erreurMdp<br>
        </form>
        
        
        $val
                <br>

        
        <a href='index.php?action=ProfilAdmin#ListeProfil' class='bouton'>&emsp;Retourner sur la liste&emsp;</a>
        <br>


        <br>

</div><br>";

require("template/template.php"); ?>