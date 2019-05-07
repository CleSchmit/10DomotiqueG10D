<?php session_start();
ob_start();

include_once 'controller/ControlSupp.php';

$Id_Profil = $_SESSION['Id_Profil'];

$body="
<br>
<div id=\"CProfil\" class=\"Modif\">
    <form action=\"/supprmer.php\">
        Voulez-vous vraiment supprimer votre profil ?
    <input type=\"submit\" value=\"Valider\">
</form>
";


