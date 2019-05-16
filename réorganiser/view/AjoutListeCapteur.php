<?php session_start();
include_once 'controller/ControlAjoutListeCapteur.php';
ob_start();

$body="
<div class='main'>
<br>
    <div id=\"Cforum\">
    <br>
        <h1>Ajout d'un capteur</h1>
        <form method=\"post\" action=\"index.php?action=AjoutListeCapteur\">
            <p>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"Nom...\" required /><br><br>
                <input class=\"connexion\" name=\"Prix\" type=\"number\" placeholder=\"Prix...\" required /><br><br>
                <input class=\"connexion\" name=\"Consommation\" type=\"number\" placeholder=\"en W/h...\" required /><br><br>
                <br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Valider l'ajout!\" />
                
                <p> <a href=\"index.php?action=ListeCapteur\">Annuler et revenir à la liste des capteurs</a></p>
            </p>
        </form>
        <br>
    </div>
<br>
</div>
";

require("template/template.php");
?>