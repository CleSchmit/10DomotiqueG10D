<?php session_start();
include_once 'controller/ControlPiece2.php';

ob_start();

$body="
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>添加一间房间</h1>
        <form method=\"post\" action=\"index_cn.php?action=AjoutPiece&id=".$_GET['id']."&Maison=".$_GET['Maison']."\">
            <p>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"名字...\" required /><br><br>
                <input class=\"connexion\" name=\"Superficie\" type=\"number\" placeholder=\"面积m&sup2;\" /><br><br>
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
