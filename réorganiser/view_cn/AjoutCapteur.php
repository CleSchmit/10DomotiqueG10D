<?php session_start();
include_once 'controller/ControlCapteur.php';

ob_start();

$body="
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>Ajout d'un capteur</h1>
        <form method=\"post\" action=\"index.php?action=AjoutCapteur&id=".$_GET['id']."&Maison=".$_GET['Maison']."\">
            <p>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"Nom...\" required /><br><br>
                <label>Quelle capteur voulez-vous ajouter?</label><br>
                <select name=\"Model\">
                    <option>--Select an option--</option>
                    <option value=\"1\">Capteur infrarouge  34$</option>
                    <option value=\"2\">Capteur température  25$</option>
                    <option value=\"3\">Actionneur lumière  10$</option>
                </select>
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