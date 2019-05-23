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


                <div class="nom"><br><img class="imgprofil" src="view/images/talin.png">&ensp;<?= $_SESSION['Prenom']?>&ensp;<?= $_SESSION['Nom']?><br><br></div>

                <div class="lien"><br><a class="PrezMaison">&emsp;房间</a><br><br></div>

                <div class="navMaisons">
                    <?php for($i=0 ; $i < sizeof($_SESSION['Maison']); $i++){

                        echo "<div class=\"ChoixMaison\"><br><a href='#Maison".$i."' class='Maison'>&emsp;".$_SESSION['Maison'][$i][1]."&emsp;</a>
                          <a href='index_cn.php?action=supprimerMaison&id=".$_SESSION['Maison'][$i][0]."' class='delete'>&ensp;X&ensp;</a><br><br>
                          </div>";
                    }?>
                    <div class="ChoixMaison"><br><a class="Maison" href='index_cn.php?action=AjoutMaison'>&emsp;+添加一个房间&emsp;</a><br><br></div>
                </div>



                <a href='index_cn.php?action=ProfilModif'><div class="lien"><br><img class="imgOption" src="view/images/Modif.png">&ensp;更改你的资料<br><br></div></a>

                <a href='index_cn.php?action=supprimerProfil'><div class="lien"><br>删除你的资料<br><br></div></a>

                <a href='index_cn.php?action=deconnexion'><div class="lien"><br><img class="imgOption" src="view/images/deco.png">&ensp;登出<br><br></div></a>

            </div>


            <br>
            <br>
            <br>
            <br>




            <div class='internProfil'>

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
                              <a href='index_cn.php?action=supprimerPiece&id=".$_SESSION['Maison'][$i][2][$j][0]."&Maison=Maison".$i."' class='delete'>&ensp;X&ensp;</a><br><br><br>
                              <div class='Capteurs'>";


                        for ($k = 0; $k < sizeof($_SESSION['Maison'][$i][2][$j][2]);$k++){



                            if($_SESSION['Maison'][$i][2][$j][2][$k][3] == 1){
                                echo "<a href='index_cn.php?action=CapteurAction&Maison=".$i."&Piece=".$j."&Capteur=".$k."'><figure>
                                    <img class='imgCapteur' src='view/images/CapteurI.png'>
                                        <figcaption>&emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][1]."&emsp;</figcaption>
                                    </figure></a>";
                            }
                            if($_SESSION['Maison'][$i][2][$j][2][$k][3] == 2){
                                echo "<a><figure>
                                    <img class='imgCapteur' src='view/images/Capteur.png'>
                                    <figcaption>&emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][1]."&emsp;</figcaption>
                                    </figure></a>";                            }
                            if($_SESSION['Maison'][$i][2][$j][2][$k][3] == 3){
                                echo "<a><figure>
                                    <img class='imgCapteur' src='view/images/CapteurP.png'>
                                    <figcaption>&emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][1]."&emsp;</figcaption>
                                    </figure></a>";}

                            echo "<a href='index_cn.php?action=supprimerCapteur&id=".$_SESSION['Maison'][$i][2][$j][2][$k][0]."&Maison=Maison".$i."' class='delete'>&ensp;X&ensp;</a>";

                            if (($k+1)%4 == 0){
                                echo "</div><div class='Capteurs'>";
                            }


                            //     <span class='Valeur'>&emsp;".$_SESSION['Maison'][$i][2][$j][2][$k][2]."&emsp;
                            //        <a class='Aug' href='index.php?action=Profil&Aug=".$_SESSION['Maison'][$i][2][$j][2][$k][0]."&Maison=Maison".$i."'>+1</a>

                        }
                        echo"<a href='index_cn.php?action=AjoutCapteur&id=".$_SESSION['Maison'][$i][2][$j][0]."&Maison=Maison".$i."'>
                                    <figure>
                                    &emsp;<img class='imgAjout' src='view/images/Ajout.png'>
                                    <figcaption>&emsp;添加传感器&emsp;</figcaption>
                                    </figure></a></div></div><br>";
                    }

                echo "<br><a href='index_cn.php?action=AjoutPiece&id=".$_SESSION['Maison'][$i][0]."&Maison=Maison".$i."'>
                                    <figure>
                                    &emsp;<img class='imgAjoutP' src='view/images/Ajout.png'>
                                    <figcaption>&emsp;添加一间房间&emsp;</figcaption>
                                    </figure></a>
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
