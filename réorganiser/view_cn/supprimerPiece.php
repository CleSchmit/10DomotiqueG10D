<?php session_start();

$Mdp = $_SESSION['Mdp'];
$Id_Piece = $_GET['id'];
$Id_Maison = $_GET['Maison'];

include_once 'controller/ControlSuppPiece2.php';

ob_start();

$body="
    <div class='main'>
    <br>
    <div id=\"Cforum\">
    <br>
        <form method=\"post\" action=\"index_cn.php?action=supprimerPiece&id=".$_GET['id']."&Maison=".$_GET['Maison']."\">
            <p>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"密码...\" required/><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"生效\" />
            </p>
        </form>
        
        <p> <a href=\"index_cn.php?action=Profil#".$Id_Maison."\">取消并返回我的信息</a></p>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>
