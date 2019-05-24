<?php session_start();

$Nom = $_GET['id'];
$Mdp = $_SESSION['Mdp'];

include_once 'controller/ControlSuppListeProfil2.php';

ob_start();

$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
    <br>
        <form method=\"post\" action=\"index_cn.php?action=supprimerListeProfil&id=".$_GET['id']."\">
            <p>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"密码...\" required/><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"生效\" />
                
                <p> <a href=\"index_cn.php?action=ProfilAdmin#ListeProfil\">取消并返回信息列表</a></p>
            </p>
        </form>
        
        
    <br>
    </div>
    <br>
    </div>";


require("template/template.php"); ?>
