<?php session_start();

$Id_Profil = $_SESSION['id'];
$Mdp = $_SESSION['Mdp'];

include_once 'controller/ControlSuppProfil.php';

ob_start();



$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
        <form method=\"post\" action=\"index.php?action=supprimerProfil\">
            <p>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"Mot de passe...\" required/><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Validé\" />
            </p>
        </form>
        
        <p> <a href=\"index.php?action=Profil\">Annuler et revenir à mon profil</a></p>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>