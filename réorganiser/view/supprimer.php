<?php session_start();
include_once 'controller/ControlSupp.php';
ob_start();

$Email = $_SESSION['Email'];

$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
        <form method=\"post\" action=\"index.php?action=supprimer\">
            <p>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"Mot de passe...\" /><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Validé\" />
            </p>
        </form>
        <p> <a href=\"index.php?action=Profil#Maison0\">Annuler et revenir à mon profil</a></p>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>