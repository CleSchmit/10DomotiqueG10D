<?php
include_once 'controller/ControlInscription2.php';

ob_start();

$body="
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>注册</h1>
        <form method=\"post\" action=\"index_cn.php?action=inscription\">
            <p>
                <input class=\"connexion\" name=\"Prenom\" type=\"text\" placeholder=\"名...\" required /><br><br>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"姓...\" required /><br><br>
                <input class=\"connexion\" name=\"Email\" type=\"email\" placeholder=\"邮箱地址...\" required /><br><br>
                <input class=\"connexion\" name=\"Tel\" type=\"tel\" placeholder=\"电话号码...\" required /><br><br>
                <input class=\"connexion\" name=\"Naissance\" type=\"date\" placeholder=\"\" required /><br>(出生年月日)<br>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"密码...\" required /><br><br>
                <input class=\"connexion\" name=\"Mdp2\" type=\"password\" placeholder=\"确认密码...\" required /><br><br>
                <label class=\"container\">
                    <input name=\"CGU\" type=\"checkbox\" required />接受用户使用条款
                    <span class=\"checkmark\"></span>
                </label>
                <br><br>

                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"注册\" />

            </p>
        </form>
        <br>
    </div>
    <br>
    </div>
";

require("template/template.php"); ?>
