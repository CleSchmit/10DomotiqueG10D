<?php session_start();

include_once 'controller/ControlConnexion.php';

ob_start();

$body="
    <div class='main'>
    <br>

    <div id=\"Cforum\">
        <form method=\"post\" action=\"index.php?action=Connexion\">
            <p>
                <h1>Votre Compte :</h1>
                <input class=\"connexion\" name=\"Email\" type=\"email\" placeholder=\"Email...\" /><br><br>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"Mot de passe...\" /><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Connexion\" />
            </p>
        </form>
        <p>Vous n'avez pas encore de compte ? <a href=\"index.php?action=inscription\">Inscrivez-vous</a></p>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>