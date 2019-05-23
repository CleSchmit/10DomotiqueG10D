<?php session_start();

include_once 'controller/ControlConnexion2.php';

ob_start();

$body="
    <div class='main'>
    <br>

    <div id=\"Cforum\">
        <form method=\"post\" action=\"index_cn.php?action=Connexion\">
            <p>
                <h1>你的账号 :</h1>
                <input class=\"connexion\" name=\"Email\" type=\"email\" placeholder=\"邮箱...\" /><br><br>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"密码...\" /><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"登入\" />
            </p>
        </form>
        <p>你还没有账号？ <a href=\"index_cn.php?action=inscription\">Inscrivez-vous</a></p>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>
