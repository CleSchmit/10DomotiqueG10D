<?php session_start();

$Mdp = $_SESSION['Mdp'];
$Id_Piece = $_GET['id'];
$Id_Maison = $_GET['Maison'];

include_once 'controller/ControlSuppPiece.php';

ob_start();

$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
    <br>
        <form method=\"post\" action=\"index.php?action=supprimerPiece&id=".$_GET['id']."&Maison=".$_GET['Maison']."\">
            <p>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"Mot de passe...\" required/><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Validé\" />
            </p>
        </form>
        
        <p> <a href=\"index.php?action=Profil#".$Id_Maison."\">Annuler et revenir à mon profil</a></p>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>
