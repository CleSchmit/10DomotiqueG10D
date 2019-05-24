<?php session_start();

$Mdp = $_SESSION['Mdp'];
$Nom = $_GET['id'];

include_once 'controller/ControlSuppListeCapteur2.php';

ob_start();

$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
    <br>
        <form method=\"post\" action=\"index_cn.php?action=supprimerListeCapteur&id=".$_GET['id']."\">
            <p>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"密码...\" required/><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"生效\" />
                
                <p> <a href=\"index_cn.php?action=ProfilAdmin#ListeCapteur\">取消并返回传感器列表</a></p>

            </p>
        </form>
        <br>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>
