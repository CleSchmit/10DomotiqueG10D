<?php session_start();

$Nom = $_GET['id'];
$Mdp = $_SESSION['Mdp'];

include_once 'controller/ControlSuppListeProfil.php';

ob_start();

$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
    <br>
        <form method=\"post\" action=\"index.php?action=supprimerListeProfil&id=".$_GET['id']."\">
            <p>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"Mot de passe...\" required/><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Validé\" />
                
                <p> <a href=\"index.php?action=ListeProfil\">Annuler et revenir à la liste des profils</a></p>
            </p>
        </form>
        
        
    <br>
    </div>
    <br>
    </div>";


require("template/template.php"); ?>