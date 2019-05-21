<?php session_start();
ob_start();

include_once 'controller/ControlModif2.php';

$Prenom = $_SESSION['Prenom'];
$Email = $_SESSION['Email'];
$Tel = $_SESSION['Tel'];
$Nom = $_SESSION['Nom'];

$body="
<br>

<div id=\"Cforum\" class=\"Modif\">
        <h1>更改我的资料 :</h1>
        <form  method=\"post\" action=\"index_cn.php?action=ProfilModif&modif=Prenom\">
        <input name=\"Prenom\" type=\"Text\" placeholder=\"$Prenom\" />
        <input type=\"submit\" value=\"更改我的名字\" /><br>
        $erreurPrenom<br>
        </form>


        <form method=\"post\" action=\"index_cn.php?action=ProfilModif&modif=Nom\">
        <input name=\"Nom\" type=\"Text\" placeholder=\"$Nom\" />
        <input type=\"submit\" value=\"更改我的姓氏\" /><br>
        $erreurNom<br>
        </form>

        如果您更改了电子邮件，您将被重定向到登录页面！
        <form method=\"post\" action=\"index_cn.php?action=ProfilModif&modif=Email\">
        <input name=\"Email\" type=\"Text\" placeholder=\"$Email\" />
        <input type=\"submit\" value=\"更改我的邮箱\" /><br>
        $erreurEmail<br>
        </form>


        <form method=\"post\" action=\"index_cn.php?action=ProfilModif&modif=Tel\">
        <input name=\"Tel\" type=\"Text\" placeholder=\"+33 $Tel\" />
        <input type=\"submit\" value=\"更改我的电话\" /><br>
        $erreurTel<br>
        </form>


        <form method=\"post\" action=\"index_cn.php?action=ProfilModif&modif=Mdp\">
        <input name=\"Mdp\" type=\"password\" placeholder=\" 新的密码\" />
        <input name=\"Mdp2\" type=\"password\" placeholder=\" 确认\" />
        <input type=\"submit\" value=\"更改我的密码\" /><br>
        $erreurMdp<br>
        </form>
                <br>


        <a href='index_cn.php?action=Connexion' class='bouton'>&emsp;返回我的资料&emsp;</a>
        <br>


        <br>

</div><br>";

require("template/template.php"); ?>
