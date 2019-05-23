<?php
session_start();
include_once "model/function.php";
include_once "controller/ControlProfil2.php";

$bdd = bdd();
?>
<html>
<head>
    <title>10Domotique</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
    <?php include "template/Header.php" ?>
</header>
<div class="corps">
    <br><div id="CProfil">



        <div class='corpsProfil'>


            <div class='headerprofil'>
                <div class="nom"><br><img class="imgprofil" src="view/images/Boss.jpg">&ensp;管理员账户 &ensp;<?= $_SESSION['Prenom']?>&ensp;<?= $_SESSION['Nom']?><br><br></div>

                <a href='index_cn.php?action=ProfilModif'><div class="lien"><br><img class="imgOption" src="view/images/Modif.png">&ensp;更改你的信息<br><br></div></a>

                <a href='index_cn.php?action=supprimerProfil'><div class="lien"><br>删除你的信息<br><br></div></a>

                <a href='index_cn.php?action=deconnexion'><div class="lien"><br><img class="imgOption" src="view/images/deco.png">&ensp;登出<br><br></div></a>

            </div>



        </div><br>";

            <br>
            <br>
            <br>
            <br>




            <div class='internProfil'>
				<u2>
                    <li1><a href="index_cn.php?action=ListeCapteur">传感器列表</a></li1>
                    <li1><a href=\"#news\">创建房屋管理员账号</a></li1>
                    <li1><a href=\"#contact\">访问资料</a></li1>
                </u2>

            </div>

            <br>
        </div>
    </div><br>
</div>
<footer>
    <?php include "template/Footer.php" ?>
</footer>
</body>
</html>
