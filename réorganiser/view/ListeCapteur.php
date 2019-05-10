<?php
session_start();
include_once "model/function.php";
include_once "controller/ControlListeCapteur.php";
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
<br><div id=\"CProfil\">

    <div class='headerprofil'>
        <ul class=\"Option\">
            <li><a href='index.php?action=deconnexion'><img class=\"dec\" src=\"view/images/deco.png\"></a></li>
            <li><a href='index.php?action=ProfilModif'><img class=\"dec\"  src=\"view/images/Modif.png\"></a></li>
        </ul>
        <br>
        <br>
        <br>
        <img class=\"imgprofil\" src=\"view/images/Boss.jpg\">
        <h1>
            Compte Administrateur
        </h1>
    </div>

<div class='corpsProfil'>

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
                display: block;
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
                echo " <li1><a href='#capteur" . $i . "'>&emsp;" . $_SESSION['capteur'][$i][0] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][1] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][2] . "&emsp;</a></li1>
                            <a href='index.php?action=supprimerCapteur&id=" . $_SESSION['capteur'][$i][0] . "' class='delete'>&ensp;X&ensp;</a><br><br><br>
                    ";
            } ?>
        </u2>
        <a class="Maison" href='index.php?action=AjoutMaison'>&emsp;+Ajouter une maison&emsp;</a>
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