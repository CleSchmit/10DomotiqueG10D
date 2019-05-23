<?php
session_start();
include_once "model/function.php";
include_once "controller/ControlListeCapteur2.php";
include_once 'controller/ControlAjoutListeCapteur2.php';
include_once "controller/ControlListeProfil2.php";
include_once 'controller/ControlInscriptionAdmin2.php';
include_once 'controller/ControlInscriptionGestionnaire2.php';
include_once 'controller/ControlInscriptionUtilisateur2.php';


$bdd = bdd();
?>

<html>
<head>
    <title>10Domotique</title>
    <link rel="stylesheet" href="view/style.css" />
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

                <a href="#ListeCapteur" ><div class="ChoixListe"><br>&emsp;Liste capteurs<br><br></div></a>

                <a href="#ListeProfil"><div class="ChoixListe"><br>&emsp;Liste profils<br><br></div></a>

                <a href='index_cn.php?action=ProfilModif'><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/Modif.png">&ensp;更改资料<br><br></div></a>

                <a href='index_cn.php?action=supprimerProfil' class="lienOption"><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/croix.png">&ensp;删除你的资料<br><br></div></a>

                <a href='index_cn.php?action=deconnexion'><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/deco.png">&ensp;注销<br><br></div></a>
            </div>

            <div class="interligne"></div>


            <br>
            <br>
            <br>
            <br>

        <div class='internProfil'>


            <div class="navListe" id="ListeCapteur">
                <h3><br>&emsp;传感器列表<br><br></h3><br>

                <a href='index_cn.php?action=AjoutListeCapteur'><div class='AjoutC'><br><div class='AjoutC2'>
                            <img class='imgAjout' src='view/images/Ajout.png'>
                            &emsp;添加传感器</div><br></div></a><br><br>

                    <?php for($i=0 ; $i < sizeof($_SESSION['capteur']); $i++) {
                        echo " <div class='ChoixListeC'><a href='index_cn.php?action=supprimerListeCapteur&id=" . $_SESSION['capteur'][$i][0] . "' class='delete' id='DelC'>&times;&emsp;</a><br>&emsp;" . $_SESSION['capteur'][$i][0] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][1] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][2] . "&emsp;<br><br></div><br>
                    ";
                    } ?>
                    <br>



            </div>
            <div class="navListe" id="ListeProfil">

                <h3><br>&emsp;资料列表<br><br></h3><br>

                <div class="AjoutCompte">
                <a href='index_cn.php?action=inscriptionGestionnaire'><div class='AjoutCO'><br><div>
                            <img class='imgAjoutCO' src='view/images/Ajout.png'>
                            &emsp;添加一个房屋管理员账号</div><br></div></a>
                <a href='index_cn.php?action=inscriptionAdmin'><div class='AjoutCO'><br><div>
                            <img class='imgAjoutCO' src='view/images/Ajout.png'>
                            &emsp;添加一个管理员账号</div><br></div></a>
                <a href='index_cn.php?action=inscriptionUtilisateur'><div class='AjoutCO'><br><div>
                            <img class='imgAjoutCO' src='view/images/Ajout.png'>
                            &emsp;添加一个用户账号</div><br></div></a></div>

                <br>

                <table>
                    <tr class="Prez">
                        <td>姓氏</td>
                        <td>名字</td>
                        <td>邮箱</td>
                        <td>电话号码</td>
                        <td>出生日期</td>
                        <td>角色</td>
                        <td>更改</td>
                        <td>&emsp;</td></tr>
                    <?php for($i=0 ; $i < sizeof($_SESSION['profil']); $i++) {

                        if($i%2==0){
                            if ($_SESSION['profil'][$i][9] == NULL){
                                $color = 'rgb(255, 77, 77)';
                            }else{
                                $color='lightgray';
                            }
                        }else{
                            if ($_SESSION['profil'][$i][9] == NULL){
                                $color = 'rgb(255, 153, 153)';
                            }else {
                                $color = 'white';
                            }
                        }


                        echo "<tr style='border: 14px solid ".$color.";background-color: ".$color.";'>
                         <td><br>".$_SESSION['profil'][$i][0]."</td>
                         <td><br>".$_SESSION['profil'][$i][1]."</td>
                         <td><br>".$_SESSION['profil'][$i][2]."</td>
                         <td><br>+33 ".$_SESSION['profil'][$i][3]."</td>
                         <td><br>".$_SESSION['profil'][$i][4]."</td>
                         <td><br>".$_SESSION['profil'][$i][5]."</td>
                         <td><br><a href='index_cn.php?action=ProfilModifAdmin&i=" . $i. "' style='color: blue'>Modifier</a></td>
                         <td><a href='index_cn.php?action=supprimerListeProfil&id=" .$_SESSION['profil'][$i][8]. "' class='delete'>&times;&ensp;</a></td>
                         </tr>                 ";
                    } ?>
                </table>
                    <br>



            </div>

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
