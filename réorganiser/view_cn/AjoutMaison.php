<?php session_start();
include_once 'controller/ControlMaison.php';

ob_start();

$body="
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>添加一个房间</h1>
        <form method=\"post\" action=\"index_cn.php?action=AjoutMaison\">
            <p>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"名字...\" required /><br><br>
                <input class=\"connexion\" name=\"Adresse\" type=\"text\" placeholder=\"地址...\" required /><br><br>
                <input class=\"connexion\" name=\"Superficie\" type=\"number\" placeholder=\"面积...\" required /><br><br>
                <input class=\"connexion\" name=\"NbPieces\" type=\"number\" placeholder=\"数量...\" /><br><br>
                <input class=\"connexion\" name=\"NbHabitant\" type=\"number\" placeholder=\"人数...\" /><br><br>
                <br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"添加生效!\" />

            </p>
        </form>
        <br>
    </div>
    <br>
    </div>
";

require("template/template.php"); ?>
