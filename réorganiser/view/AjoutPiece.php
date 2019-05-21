<?php session_start();
include_once 'controller/ControlPiece.php';

ob_start();

$body="
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>Ajout d'une Piece</h1>
        <form method=\"post\" action=\"index.php?action=AjoutPiece&id=".$_GET['id']."&Maison=".$_GET['Maison']."\">
            <p>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"Nom...\" required /><br><br>
                <input class=\"connexion\" name=\"Superficie\" type=\"number\" placeholder=\"Superficie en m&sup2;\" /><br><br>
                <br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Valider l'ajout!\" />

            </p>
        </form>
        <p> <a href=\"index.php?action=Profil#Maison".$_GET['Maison']."\">Annuler et revenir à mon profil</a></p>

        <br>
    </div>
    <br>
    </div>
";

require("template/template.php"); ?>