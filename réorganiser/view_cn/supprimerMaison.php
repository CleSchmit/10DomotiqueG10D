<?php session_start();

$Mdp = $_SESSION['Mdp'];
$Id_Maison = $_GET['id'];

include_once 'controller/ControlSuppMaison2.php';

ob_start();

$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
        <form method=\"post\" action=\"index_cn.php?action=supprimerMaison&id=".$_GET['id']."\">
            <p>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"密码...\" required/><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"生效\" />
            </p>
        </form>

        <p> <a href=\"index.php?action=Profil\">取消并返回我的资料</a></p>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>
