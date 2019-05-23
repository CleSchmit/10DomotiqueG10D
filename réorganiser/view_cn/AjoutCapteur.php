<?php session_start();
include_once 'controller/ControlCapteur2.php';
include_once 'controller/ControlListeCapteur2.php';
ob_start();

echo "
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>添加一个传感器</h1>
        <form method=\"post\" action=\"index_cn.php?action=AjoutCapteur&id=".$_GET['id']."&Maison=".$_GET['Maison']."\">
            <p>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"Nom...\" required /><br><br>
                <label>你想添加哪一个传感器?</label><br>
                <select name=\"Model\">
                    <option>--Select an option--</option>";
                    for ($i = 1; $i <= sizeof($_SESSION['capteur']); $i++) {
                        echo " <option value= $i >Capteur&emsp;" . $_SESSION['capteur'][$i-1][0] . "&emsp;&emsp;" . $_SESSION['capteur'][$i-1][1] . "$</option> ";
                    }
              echo" </select>
                <br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"添加生效！\" />
            </p>
        </form>
        <p> <a href=\"index.php?action=Profil#Maison".$_GET['Maison']."\">Annuler et revenir à mon profil</a></p>

        <br>
    </div>
    <br>
    </div>";

require("template/template.php"); ?>


