<?php session_start();
include_once 'controller/ControlMaison.php';

ob_start();

$body="
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>Ajout d'une maison</h1>
        <form method=\"post\" action=\"index.php?action=AjoutMaison\">
            <p>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"Nom...\" required /><br><br>
                <input class=\"connexion\" name=\"Adresse\" type=\"text\" placeholder=\"Adresse...\" required /><br><br>
                <input class=\"connexion\" name=\"Superficie\" type=\"number\" placeholder=\"Superficie ...\" required /><br><br>
                <input class=\"connexion\" name=\"NbPieces\" type=\"number\" placeholder=\"Nombre de pieces...\" /><br><br>
                <input class=\"connexion\" name=\"NbHabitant\" type=\"number\" placeholder=\"Nombre habitant...\" /><br><br>
                <br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Valider l'ajout!\" />

            </p>
        </form>
        <br>
    </div>
    <br>
    </div>
";

require("template/template.php"); ?>