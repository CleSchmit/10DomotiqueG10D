<?php
session_start();
include_once "model/function.php";
include_once "controller/ControlListeCapteur.php";
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

        <div class='corpsProfil'>

            <div class='headerprofil'>
                <div class="nom"><br><img class="imgprofil" src="view/images/Boss.jpg">&ensp;Compte Administrateur &ensp;<?= $_SESSION['Prenom']?>&ensp;<?= $_SESSION['Nom']?><br><br></div>

                <a href='index.php?action=ProfilModif'><div class="lien"><br><img class="imgOption" src="view/images/Modif.png">&ensp;Modification du profil<br><br></div></a>

                <a href='index.php?action=supprimerProfil'><div class="lien"><br>Supprimer votre profil<br><br></div></a>

                <a href='index.php?action=deconnexion'><div class="lien"><br><img class="imgOption" src="view/images/deco.png">&ensp;Déconnexion<br><br></div></a>
            </div>

        </div>

            <br>
            <br>
            <br>
            <br>

        <div class='internProfil'>

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
                <li1><a href="index.php?action=ListeCapteur">Liste capteurs</a></li1>
                <li1><a href="index.php?action=ListeProfil">Liste profils</a></li1>
            </u2>

        </div>

    </div>

</div>

<br>

<footer>
    <?php include "template/Footer.php" ?>
</footer>
</body>
</html>
