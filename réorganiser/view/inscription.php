<?php
include_once 'controller/ControlInscription.php';

ob_start();

$body="
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>Inscription</h1>
        <form method=\"post\" action=\"index.php?action=inscription\">
            <p>
                <input class=\"connexion\" name=\"Prenom\" type=\"text\" placeholder=\"Prenom...\" required /><br><br>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"Nom...\" required /><br><br>
                <input class=\"connexion\" name=\"Email\" type=\"email\" placeholder=\"Adresse Email...\" required /><br><br>
                <input class=\"connexion\" name=\"Tel\" type=\"tel\" placeholder=\"Téléphone portable...\" required /><br><br>
                <input class=\"connexion\" name=\"Naissance\" type=\"date\" placeholder=\"\" required /><br>(date de naissance)<br>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"Mot de passe...\" required /><br><br>
                <input class=\"connexion\" name=\"Mdp2\" type=\"password\" placeholder=\"Confirmation...\" required /><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"S'inscrire!\" />

            </p>
        </form>
        <br>
    </div>
    <br>
    </div>
";

require("template/template.php"); ?>