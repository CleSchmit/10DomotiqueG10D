<?php
session_start();
include_once "model/function.php";
include_once "controller/ControlProfilGestion.php";
include_once 'controller/ControlCapteurAction.php';


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

                <div class="nom"><br><img class="imgprofil" src="view/images/talin.png">&ensp;Gestionnaire d'immeuble<br><br></div>

                <div class="lienM"><br><a class="PrezMaison">&emsp;Habitation de l'immeuble</a><br><br></div>

                <div class="navMaisons">
                    <?php for($i=0 ; $i < sizeof($_SESSION['Maison']); $i++){

                        echo "
                              <a href='#Maison".$i."' class='Maison'>
                                    <div class=\"ChoixMaison\"><br>&emsp;".$_SESSION['Maison'][$i][1]."&emsp;
                                        <br><br>
                                    </div>
                              </a>";
                    }?>
                </div>

                <a href='index.php?action=Graphconso' class="lienOption"><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/Modif.png">&ensp;Graphique des consommations<br><br></div></a>

                <a href='index.php?action=ProfilModif' class="lienOption"><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/Modif.png">&ensp;Modification du profil<br><br></div></a>

                <a href='index.php?action=supprimerProfil' class="lienOption"><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/croix.png">&ensp;Supprimer votre profil<br><br></div></a>

                <a href='index.php?action=deconnexion' class="lienOption"><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/deco.png">&ensp;Déconnexion<br><br></div></a>

            </div>

            <br>
            <br>
            <br>
            <br>

            <div class="interligne"></div>

            <div class='internProfil'>

                <?php for($i=0 ; $i < sizeof($_SESSION['Maison']); $i++){

                    echo "
                <style>#Maison".$i.":target ~ #DifMaisons".$i."{
                    display: block;
                }</style>
                <span id='Maison".$i."' class=\"target\"></span>
                <div class='Maisons' id=\"DifMaisons".$i."\">
                    <h3><br>&emsp;".$_SESSION['Maison'][$i][1]. "<br><br></h3><br>
                    ";

                    for ($j = 0; $j < sizeof($_SESSION['Maison'][$i][2]); $j++){
                        echo "<div class='Piece'><h4><br>&emsp;&emsp;".$_SESSION['Maison'][$i][2][$j][1]."
                              <br><br></h4><br>
                                
                              <div class='Capteurs'>";


                        for ($k = 0; $k < sizeof($_SESSION['Maison'][$i][2][$j][2]);$k++){



                            echo "<div class='Capteur'>";



                            if($_SESSION['Maison'][$i][2][$j][2][$k][3] == 1){
                                $link = "index.php?action=ProfilGestion&Maison=".$i."&Piece=".$j."&Capteur=".$k."&Alarm=on#Maison".$i;
                                $action = "<a href=".$link." class='lienCapteur'>Activer</a>";
                                if ($_SESSION['Maison'][$i][2][$j][2][$k][2] == 1){
                                    $link = "index.php?action=ProfilGestion&Maison=".$i."&Piece=".$j."&Capteur=".$k."&Alarm=off#Maison".$i;
                                    $action ="<a href=".$link." class='lienCapteur'>Desactiver</a>"
                                    ;}

                                echo "
                                    <img class='imgCapteur' src='view/images/CapteurI.png'>
                                    &emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][1]."&emsp;
                                    
                                    <br>";
                                if ($_SESSION['Maison'][$i][2][$j][2][$k][2] == 1){
                                    echo "<div style='background-color: green' class='info'>&ensp;On&ensp;</div>";
                                }else{
                                    echo "<div style='background-color: red;' class='info'>&ensp;Off&ensp;</div>";
                                }
                                echo $action;
                            }
                            if($_SESSION['Maison'][$i][2][$j][2][$k][3] == 2){

                                $link = "index.php?action=ProfilGestion&Maison=".$i."&Piece=".$j."&Capteur=".$k."#Maison".$i;


                                echo "
                                    <img class='imgCapteur' src='view/images/Capteur.png'>
                                    <div class='Tempname'>&emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][1]."</div>
                                    <div class='Tempchoisi'>".$_SESSION['Maison'][$i][2][$j][2][$k][2]."°C</div>
                                    <br>
                                    <div class='infoT'>".$_SESSION['Maison'][$i][2][$j][2][$k][2]."°C</div><span>10°C</span>
                                    <form class='Temp' method='post' action=$link>
                                        <input type=\"range\" name='Temp' value=".$_SESSION['Maison'][$i][2][$j][2][$k][2]." min='10' max='30'/>30°C
                                        <input type=\"submit\" value=\"Valider\" />
                                    </form>  
                                    ";
                            }
                            if($_SESSION['Maison'][$i][2][$j][2][$k][3] == 3){

                                $link = "index.php?action=ProfilGestion&Maison=".$i."&Piece=".$j."&Capteur=".$k."&Lum=on#Maison".$i;
                                $action = "<a href=".$link." class='lienCapteur'>Allumer</a>";
                                if ($_SESSION['Maison'][$i][2][$j][2][$k][2] == 1){
                                    $link = "index.php?action=ProfilGestion&Maison=".$i."&Piece=".$j."&Capteur=".$k."&Lum=off#Maison".$i;
                                    $action ="<a href=".$link." class='lienCapteur'>Eteindre</a>"
                                    ;}

                                echo "
                                    <img class='imgCapteur' src='view/images/CapteurP.png'>
                                    &emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][1]."&emsp;
                                    <br>";
                                if ($_SESSION['Maison'][$i][2][$j][2][$k][2] == 1){
                                    echo "<div style='background-color: yellow' class='info'>&ensp;On&ensp;</div>";
                                }else{
                                    echo "<div style='background-color: black; color: white;' class='info'>&ensp;Off&ensp;</div>";
                                }

                                echo $action;}

                            echo "</div>";

                            if (($k+1)%2 == 0){
                                echo "</div><br><div class='Capteurs'>";
                            }


                            //     <span class='Valeur'>&emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][2]."&emsp;
                            //        <a class='Aug' href='index.php?action=Profil&Aug=".$_SESSION['Maison'][$i][2][$j][2][$k][0]."&Maison=Maison".$i."'>+1</a>

                        }
                        echo"</div><br><br><br>
                                    </div><br>";
                    }

                    echo "<br>
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





