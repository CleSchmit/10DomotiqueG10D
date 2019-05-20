<?php session_start();

include_once 'controller/ControlConnexion.php';

ob_start();

$body="
    <div class='main'>
    <br>

    <div id=\"Cforum\">
        <form method=\"post\" action=\"index_cn.php?action=Connexion\">
            <p>
                <h1>你的账号 :</h1>
                <input class=\"connexion\" name=\"Email\" type=\"email\" placeholder=\"Email...\" /><br><br>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"Mot de passe...\" /><br><br>
                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"Connexion\" />
            </p>
        </form>
        <p>还没有账号? <a href=\"index_cn.php?action=inscription\">注册</a></p>

    </div>
    <br>
    </div>";


require("template/template.php"); ?>
