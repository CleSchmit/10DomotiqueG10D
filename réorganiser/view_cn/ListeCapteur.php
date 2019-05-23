<?php
session_start();
include_once "model/function.php";
include_once "controller/ControlListeCapteur2.php";

$bdd = bdd();
?>
<html>
<head>
    <title>10Domotique</title>
    <link rel="stylesheet" href="../style.css" />
</head>
<body>

<header>
    <?php include "template/Header.php" ?>
</header>

<div class="corps">

    <br>

    <div id="CProfil">

        <br>
        <br>
        <br>
        <br>

        <div class='internProfil'>

            <div class="navListeCapteur">

                <style>
                    u2 {
                        list-style-type: none;
                        margin: 0;
                        padding: 0;
                        width: 400px;
                        background-color: #f1f1f1;
                    }

                    li1 a {
                        display: inline-block;
                        color: #000;
                        padding: 8px 16px;
                        text-decoration: none;
                    }

                    /* Change the link color on hover */
                    li1 a:hover {
                        background-color: #555;
                        color: white;
                    }
                </style>

                <u2>
                    <?php for($i=0 ; $i < sizeof($_SESSION['capteur']); $i++) {
                        echo " <li1>&emsp;" . $_SESSION['capteur'][$i][0] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][1] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][2] . "&emsp;<a href='index_cn.php?action=supprimerListeCapteur&id=" . $_SESSION['capteur'][$i][0] . "'>&ensp;X&ensp;</a></li1><br>
                    ";
                    } ?>
                    <br>
                    <br>
                    <li1><a href='index_cn.php?action=AjoutListeCapteur'>添加一个传感器</a></li1>
                    <br>
                    <br>
                    <li1><a href='index_cn.php?action=ProfilAdmin'>返回菜单</a></li1>
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





