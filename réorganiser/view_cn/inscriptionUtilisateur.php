<?php
include_once 'controller/ControlInscriptionUtilisateur2.php';

ob_start();

$body="
<div class='main'>
<br>
<div id=\"Cforum\">
        <h1>创建用户账号</h1>
        <form method=\"post\" action=\"index_cn.php?action=inscriptionUtilisateur\">
            <p>
                <input class=\"connexion\" name=\"Prenom\" type=\"text\" placeholder=\"名字...\" required /><br><br>
                <input class=\"connexion\" name=\"Nom\" type=\"text\" placeholder=\"姓氏...\" required /><br><br>
                <input class=\"connexion\" name=\"Email\" type=\"email\" placeholder=\"邮箱地址...\" required /><br><br>
                <input class=\"connexion\" name=\"Tel\" type=\"tel\" placeholder=\"电话号码...\" required /><br><br>
                <input class=\"connexion\" name=\"Naissance\" type=\"date\" placeholder=\"\" required /><br>(出生日期)<br>
                <input class=\"connexion\" name=\"Mdp\" type=\"password\" placeholder=\"密码...\" required /><br><br>
                <input class=\"connexion\" name=\"Mdp2\" type=\"password\" placeholder=\"重复密码...\" required /><br><br>
                <br><br>

                    $erreur
                <br>
                <input class=\"bouton\" type=\"submit\" value=\"创建\" />
                
                <p> <a href=\"index_cn.php?action=ProfilAdmin#ListeProfil\">取消并返回信息列表</a></p>

            </p>
        </form>
        <br>
    </div>
    <br>
    </div>
";

require("template/template.php"); ?>
