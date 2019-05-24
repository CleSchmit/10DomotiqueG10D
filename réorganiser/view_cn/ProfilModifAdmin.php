<?php session_start();
ob_start();

include_once 'controller/ControlModifAdmin2.php';

$Prenom = $_SESSION['profil'][$_GET['i']][1];
$Email = $_SESSION['profil'][$_GET['i']][2];
$Tel = $_SESSION['profil'][$_GET['i']][3];
$Nom = $_SESSION['profil'][$_GET['i']][0];
$Adresse = $_SESSION['profil'][$_GET['i']][5];

$val = '';
if ($_SESSION['profil'][$_GET['i']][9] == NULL){
    $val = "<form method=\"post\" action=\"index_cn.php?action=ProfilModifAdmin&modif=Validation&i=".$_GET['i']."\">
        <input name='Validation' type=\"submit\" style='background-color: lightcoral' value=\"注册生效\" /><br>
        </form>";
}

$body="
<br>

<div id=\"Cforum\" class=\"Modif\">
        <h1>更改你的信息 :</h1>
        <form  method=\"post\" action=\"index_cn.php?action=ProfilModifAdmin&modif=Prenom&i=".$_GET['i']."\">
        <input name=\"Prenom\" type=\"Text\" placeholder=\"$Prenom\" />
        <input type=\"submit\" value=\"更改我的名字\" /><br>
        $erreurPrenom<br>
        </form>
        
        
        <form method=\"post\" action=\"index_cn.php?action=ProfilModifAdmin&modif=Nom&i=".$_GET['i']."\">
        <input name=\"Nom\" type=\"Text\" placeholder=\"$Nom\" />
        <input type=\"submit\" value=\"更改我的姓氏\" /><br>
        $erreurNom<br>
        </form>
        
        /!\ 如果您更改了电子邮件，您将被重定向到登录页面
        <form method=\"post\" action=\"index_cn.php?action=ProfilModifAdmin&modif=Email&i=".$_GET['i']."\">
        <input name=\"Email\" type=\"Text\" placeholder=\"$Email\" />
        <input type=\"submit\" value=\"更改我的邮箱\" /><br>
        $erreurEmail<br>
        </form>
        
        
        <form method=\"post\" action=\"index_cn.php?action=ProfilModifAdmin&modif=Tel&i=".$_GET['i']."\">
        <input name=\"Tel\" type=\"Text\" placeholder=\"+33 $Tel\" />
        <input type=\"submit\" value=\"更改我的电话号码\" /><br>
        $erreurTel<br>
        </form>
        
        <form method=\"post\" action=\"index_cn.php?action = ProfilModifAdmin&modif=Adresse&i=".$_GET['i']."\">
        <input name=\"Tel\" type=\"Text\" placeholder=\" $Adresse\" />
        <input type=\"submit\" value=\"更改我的地址\" /><br>
        $erreurAdresse<br>
        </form>
        
        
        <form method=\"post\" action=\"index_cn.php?action=ProfilModif&modif=Mdp&i=".$_GET['i']."\">
        <input name=\"Mdp\" type=\"password\" placeholder=\" 新的密码\" />
        <input name=\"Mdp2\" type=\"password\" placeholder=\" 重复新的密码\" />
        <input type=\"submit\" value=\"更改我的密码\" /><br>
        $erreurMdp<br>
        </form>
        
        
        $val
                <br>

        
        <a href='index_cn.php?action=ProfilAdmin#ListeProfil' class='bouton'>&emsp;返回列表&emsp;</a>
        <br>


        <br>

</div><br>";

require("template/template.php"); ?>
