<?php session_start();

$Mdp = $_SESSION['Mdp'];
$Nom = $_GET['id'];

include_once 'controller/ControlSuppListeCapteur.php';

ob_start();

$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
    <br>
        <form method=\"post\" action=\"index.php?action=supprimerListeCapteur&id=".$_GET['id']."\">
            <p>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"Mot de passe...\" required/><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Validé\" />
                
                <p> <a href=\"index.php?action=ProfilAdmin#ListeCapteur\">Annuler et revenir à la liste des capteurs</a></p>

            </p>
        </form>
        <br>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>
