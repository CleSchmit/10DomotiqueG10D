<?php ob_start();

$body="<div class='main'>
            <img src='view/images/FondMaison.jpg' class='imageFond'>
            <a href='index_cn.php?action=NosProduits' class='VersProduit'>发现我们的产品</a>
            <a href=\"index_cn.php?action=Connexion\" class='VersConnexion'>&emsp;登录&emsp;</a>

        <br><br><br>
        <div class='information' style='    border-top-left-radius: 20px ;  border-bottom-left-radius: 20px ;'>
            <div><p>&emsp;你想省钱，改善你的日常生活吗？ <br> &emsp;您希望从我们的服务中受益吗？</p><br><br>
            <a href='index_cn.php?action=Contacter'><div class='contact'>与我们联系</div></a></div>
            <img src='view/images/Ask.png'>
        </div>

        <br>
        <div class='information' style='    border-top-right-radius: 20px ;  border-bottom-right-radius: 20px ;'>
            <img src='view/images/Connec.png'>
            <div class='ins'><p>&emsp;您可以从我们的服务中受益 <br> &emsp;你还没有帐户?</p><br><br>
            <a href='index_cn.php?action=inscription'><div class='contact'>注册</div></a></div>
        </div>
        <br>

        </div>
        ";

require("template/template.php"); ?>
