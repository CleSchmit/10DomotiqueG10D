<?php
session_start();
include_once "model/function.php";
include_once "controller/ControlProfil.php";

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
                <div class="nom"><br><img class="imgprofil" src="view/images/Boss.jpg">&ensp;Compte Administrateur &ensp;<?= $_SESSION['Prenom']?>&ensp;<?= $_SESSION['Nom']?><br><br></div>

                <a href='index.php?action=ProfilModif'><div class="lien"><br><img class="imgOption" src="view/images/Modif.png">&ensp;Modification du profil<br><br></div></a>

                <a href='index.php?action=supprimerProfil'><div class="lien"><br>Supprimer votre profil<br><br></div></a>

                <a href='index.php?action=deconnexion'><div class="lien"><br><img class="imgOption" src="view/images/deco.png">&ensp;Déconnexion<br><br></div></a>

            </div>



        </div><br>";

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
                        echo " <li1><a href='#capteur" . $i . "'>&emsp;" . $_SESSION['capteur'][$i][0] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][1] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][2] . "&emsp;</a><a href='index.php?action=supprimerCapteur&id=" . $_SESSION['capteur'][$i][0] . "' class='delete'>&ensp;X&ensp;</a></li1>
                    ";
                    } ?>
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





