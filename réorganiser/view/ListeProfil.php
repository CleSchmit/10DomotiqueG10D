<?php
session_start();
include_once "model/function.php";
include_once "controller/ControlListeProfil.php";
$bdd = bdd();
$_SESSION['indice'] = array();
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

            <div class="navListeProfil">

                <style>
                    u2 {
                        list-style-type: none;
                        margin: 0;
                        padding: 8px 16px;
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
                <?php for($i=0 ; $i < sizeof($_SESSION['profil']); $i++) {
<<<<<<< HEAD
                    echo " <li1><a href=\"index.php?action=ProfilModifAdmin&i=$i\">&emsp;" . $_SESSION['profil'][$i][0] . "&emsp;&emsp;" . $_SESSION['profil'][$i][1] . "&emsp;&emsp;" . $_SESSION['profil'][$i][2] . "&emsp;&emsp;" . $_SESSION['profil'][$i][3] . "&emsp;&emsp;" . $_SESSION['profil'][$i][4] . "&emsp;&emsp;" . $_SESSION['profil'][$i][5] . "&emsp;&emsp;" . $_SESSION['profil'][$i][6] . "&emsp;&emsp;" . $_SESSION['profil'][$i][9] . "&emsp;</a><a href='index.php?action=supprimerListeProfil&id=".$_SESSION['profil'][$i][8] ."'>&ensp;X&ensp;</a></li1><br>
=======
                    echo " <li1><a href=\"index.php?action=ProfilModifAdmin&i=0\">&emsp;" . $_SESSION['profil'][$i][0] . "&emsp;&emsp;" . $_SESSION['profil'][$i][1] . "&emsp;&emsp;" . $_SESSION['profil'][$i][2] . "&emsp;&emsp;" . $_SESSION['profil'][$i][3] . "&emsp;&emsp;" . $_SESSION['profil'][$i][4] . "&emsp;&emsp;" . $_SESSION['profil'][$i][5] . "&emsp;&emsp;" . $_SESSION['profil'][$i][6] . "&emsp;&emsp;" . $_SESSION['profil'][$i][7] . "&emsp;</a><a href='index.php?action=supprimerListeProfil&id=" . $_SESSION['profil'][$i][7] . "'>&ensp;X&ensp;</a></li1><br>
>>>>>>> parent of 1a680ea... Merge branch 'master' of https://github.com/CleSchmit/10DomotiqueG10D
                    ";
                } ?>
                <br>
                <br>
                <li1><a href="index.php?action=inscriptionGestionnaire">Ajouter un compte gestionnaire d'immmeuble</a></li1>
                <br>
                <li1><a href="index.php?action=inscriptionAdmin">Ajouter un compte Admin</a></li1>
                <br>
                <li1><a href="index.php?action=inscriptionUtilisateur">Ajouter un compte Utilisateur</a></li1>
                <br>
                <br>
                <li1><a href='index.php?action=ProfilAdmin'>Revenir au menu</a></li1>
            </u2>

            </div>

        </div>

    </div>

</div>

<br>

<footer>
    <?php include "template/Footer.php" ?>
</footer>
</body>
</html>
