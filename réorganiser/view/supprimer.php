<?php session_start();
ob_start();

$Email = $_SESSION['Email'];

$body="
<br>
<form action=\"/index.php?action=ControlSupp\">
        Voulez-vous vraiment supprimer votre profil ?
    <input type=\"submit\" value=\"Valider\">
</form>

<a href='index.php?action=Profil#Maison0' class='retProfil'>&emsp;Annuler et retourner sur mon profil&emsp;</a>
";

require("template/template.php"); ?>