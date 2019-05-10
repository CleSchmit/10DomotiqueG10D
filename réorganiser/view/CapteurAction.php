<?php session_start();

ob_start();

if ($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][3] == 1){
    $action ="
        <form method='post' action='index.php?action=Connexion'>
            <div class='CheckCapteur'>
            Voulez-vous activez l'alarme ?
            <div class=\"slideThree\">  
                      <input type=\"checkbox\" value=\"Alarm\" id=\"slideThree\" name=\"check\" class='Alarm'/>
                      <label for=\"slideThree\"></label>
            </div>  
            </div>
            <input class=\"boutonbis\" type=\"submit\" value=\"Valider\" />
        </form>      

        <h3>Etat Actuel du capteur : </h3>
";
}





$body = "<div id=\"Cforum\">
    <h1>Capteur : ".$_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][1]."</h1>
    ".$action."
    <br>
</div>
";

require("template/template.php"); ?>