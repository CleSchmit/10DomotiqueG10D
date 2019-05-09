<?php session_start();

$Mdp = $_SESSION['Mdp'];
$Id_Maison = $_GET['id'];

include_once 'controller/ControlSuppMaison.php';

ob_start();

$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
        <form method=\"post\" action=\"index.php?action=supprimerMaison&id=".$_GET['id']."\">
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