<?php session_start();
include_once 'controller/ControlAjoutListeCapteur2.php';
ob_start();

$body="
<div class='main'>
<br>
    <div id=\"Cforum\">
    <br>
        <h1>添加一个传感器</h1>
        <form method=\"post\" action=\"index_cn.php?action=ProfilAdmin\">
            <p>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"名字...\" required /><br><br>
                <input class=\"connexion\" name=\"Prix\" type=\"number\" placeholder=\"价格...\" required /><br><br>
                <input class=\"connexion\" name=\"Consommation\" type=\"number\" placeholder=\"功率 W/h...\" required /><br><br>
                <br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"添加生效!\" />
                
                <p> <a href=\"index_cn.php?action=ProfilAdmin#ListeCapteur\">取消并返回传感器列表</a></p>
            </p>
        </form>
        <br>
    </div>
<br>
</div>
";

require("template/template.php");
?>
