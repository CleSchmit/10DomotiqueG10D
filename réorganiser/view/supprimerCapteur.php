<?php session_start();

$Mdp = $_SESSION['Mdp'];
$Id_Capteur = $_GET['id'];
$Id_Maison = $_GET['Maison'];

include_once 'controller/ControlSuppCapteur.php';

ob_start();

$body="
    <div class='suppCapteur'>
    <br>
    <div id=\"Cforum\">
    <br>
        <form method=\"post\" action=\"index.php?action=supprimerCapteur&id=".$_GET['id']."&Maison=".$_GET['Maison']."\">
            <p>
                <input class=\"connexion\" name=\"MdpCapteur\" type=\"password\" placeholder=\"Mot de passe...\" required/><br><br>
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
