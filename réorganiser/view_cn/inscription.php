<?php
include_once 'controller/ControlInscription2.php';

ob_start();

$body="
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>Inscription</h1>
        <form method=\"post\" action=\"index_cn.php?action=inscription\">
            <p>
                <input class=\"connexion\" name=\"Prenom\" type=\"text\" placeholder=\"名字...\" required/><a class='astérix'>&emsp;*</a><br><br>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"姓氏...\" required/><a class='astérix'>&emsp;*</a><br><br>
                <input class=\"connexion\" name=\"Email\" type=\"email\" placeholder=\"邮箱地址...\" required /><a class='astérix'>&emsp;*</a><br><br>
                <input class=\"connexion\" name=\"Tel\" type=\"tel\" placeholder=\"电话号码...\"/><br><br>
                <input class=\"connexion\" name=\"Naissance\" type=\"date\" placeholder=\"\"/><br>(出生日期)<br>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"密码...\" required /><a class='astérix'>&emsp;*</a><br><br>
                <input class=\"connexion\" name=\"Mdp2\" type=\"password\" placeholder=\"重复密码...\" required /><a class='astérix'>&emsp;*</a><br><br>
                <label class=\"container\">
                    <input name=\"CGU\" type=\"checkbox\" required />接受一般使用条件
                    <span class=\"checkmark\"></span>
                </label>
                <br><br>

                    $erreur
                <br>
                有星号的表格( <a class='astérix'>*</a> &emsp;) 是必须填写的<br>
                <input class=\"bouton\" type=\"submit\" value=\"注册!\" />

            </p>
        </form>
        <br>
    </div>
    <br>
    </div>
";

require("template/template.php"); ?>
