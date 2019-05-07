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

        <div class='headerprofil'>
            <div class='deco'><a href='index.php?action=deconnexion'>Deconnexion &emsp;</a> </div>
            <div class='deco'><a href='index.php?action=ProfilModif'>Modifier le Profil &emsp;</a> </div>
            <img class="imgprofil" src="view/images/talin.png">
            <h1>
                <?= $_SESSION['Prenom']?>&ensp;<?= $_SESSION['Nom']?>
            </h1>
        </div>
        <div class='corpsProfil'>
            <br>
            <br>
            <br>
            <br>

            <div class="navMaisons">&emsp;
                <?php for($i=0 ; $i < sizeof($_SESSION['Maison']); $i++){

                    echo "<a href='#Maison".$i."' class='Maison'>&emsp;".$_SESSION['Maison'][$i][1]."&emsp;</a>";
                }?>
                <a class="Maison" href='index.php?action=AjoutMaison'>&emsp;+Ajouter une maison&emsp;</a>
            </div>


            <div class='internProfil'>
                <br>

                <?php for($i=0 ; $i < sizeof($_SESSION['Maison']); $i++){
                echo "
                <style>#Maison".$i.":target ~ #DifMaisons".$i."{
                    display: block;
                }</style>
                <span id='Maison".$i."' class=\"target\"></span>
                <div class='Maisons' id=\"DifMaisons".$i."\">
                    <h3>&emsp;".$_SESSION['Maison'][$i][1]. "</h3>
                    <div class='Piece'></div>";

                    for ($j = 0; $j < sizeof($_SESSION['Maison'][$i][2]); $j++){
                        echo "<div class='Piece'><h4>&emsp;&emsp;".$_SESSION['Maison'][$i][2][$j][1]."</h4> <br>&ensp;
                              <a href=# class='delete'>&ensp;X&ensp;</a><br><br><br>  ";


                        for ($k = 0; $k < sizeof($_SESSION['Maison'][$i][2][$j][2]);$k++){
                            echo "<a class='Capteur'>&emsp;&emsp;&emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][1]."&emsp;</a>
                                  <span class='Valeur'>&emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][2]."&emsp;
                                    <a class='Aug' href='index.php?action=Profil&Aug=".$_SESSION['Maison'][$i][2][$j][2][$k][0]."&Maison=Maison".$i."'>+1</a>
                                  </span><br><br>
                                  
                                 ";
                        }
                        echo"<a href='index.php?action=AjoutCapteur&id=".$_SESSION['Maison'][$i][2][$j][0]."&Maison=Maison".$i."'>&emsp;+Ajouter un capteur</a><br><br></div><br>";
                    }

                echo "<br><a href='index.php?action=AjoutPiece&id=".$_SESSION['Maison'][$i][0]."&Maison=Maison".$i."'>&emsp;+Ajouter une Piece</a>
                      </div>";
                }?>
                <br>
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
