<?php
session_start();
include_once "model/function.php";
include_once "controller/ControlListeCapteur.php";
include_once 'controller/ControlAjoutListeCapteur.php';
include_once "controller/ControlListeProfil.php";
include_once 'controller/ControlInscriptionAdmin.php';
include_once 'controller/ControlInscriptionGestionnaire.php';
include_once 'controller/ControlInscriptionUtilisateur.php';


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

                <a href="#ListeCapteur" ><div class="ChoixListe"><br>&emsp;Liste capteurs<br><br></div></a>

                <a href="#ListeProfil"><div class="ChoixListe"><br>&emsp;Liste profils<br><br></div></a>

                <a href='index.php?action=ProfilModif'><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/Modif.png">&ensp;Modification du profil<br><br></div></a>

                <a href='index.php?action=supprimerProfil' class="lienOption"><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/croix.png">&ensp;Supprimer votre profil<br><br></div></a>

                <a href='index.php?action=deconnexion'><div class="lien"><br><p>&emsp;</p><img class="imgOption" src="view/images/deco.png">&ensp;Déconnexion<br><br></div></a>
            </div>

            <div class="interligne"></div>


            <br>
            <br>
            <br>
            <br>

        <div class='internProfil'>


            <div class="navListe" id="ListeCapteur">
                <h3><br>&emsp;Liste Capteurs<br><br></h3><br>

                <a href='index.php?action=AjoutListeCapteur'><div class='AjoutC'><br><div class='AjoutC2'>
                            <img class='imgAjout' src='view/images/Ajout.png'>
                            &emsp;Ajouter Capteur</div><br></div></a><br><br>

                    <?php for($i=0 ; $i < sizeof($_SESSION['capteur']); $i++) {
                        echo " <div class='ChoixListeC'><a href='index.php?action=supprimerListeCapteur&id=" . $_SESSION['capteur'][$i][0] . "' class='delete' id='DelC'>&times;&emsp;</a><br>&emsp;" . $_SESSION['capteur'][$i][0] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][1] . "&emsp;&emsp;" . $_SESSION['capteur'][$i][2] . "&emsp;<br><br></div><br>
                    ";
                    } ?>
                    <br>



            </div>
            <div class="navListe" id="ListeProfil">

                <h3><br>&emsp;Liste Profils<br><br></h3><br><br>

                <table>
                    <?php for($i=0 ; $i < sizeof($_SESSION['profil']); $i++) {

                        if ($i > 0){
                        echo " <tr><a href=\"index.php?action=ProfilModifAdmin&i=0\">
                         <td><br>".$_SESSION['profil'][$i][0]."</td>
                         <td><br>".$_SESSION['profil'][$i][1]."</td>
                         <td><br>".$_SESSION['profil'][$i][2]."</td>
                         <td><br>".$_SESSION['profil'][$i][3]."</td>
                         <td><br>".$_SESSION['profil'][$i][4]."</td>
                         <td><br>".$_SESSION['profil'][$i][5]."</td>
                         <td><br>".$_SESSION['profil'][$i][6]."</td></a>
                         <td><br><a href='index.php?action=supprimerListeProfil&id=" . $_SESSION['profil'][$i][7] . "'>&times;&ensp;</a></td>
                         </tr><tr class='line'>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td></tr>
                    ";}else{
                            echo " <tr><a href=\"index.php?action=ProfilModifAdmin&i=0\">
                         <td>".$_SESSION['profil'][$i][0]."</td>
                         <td>".$_SESSION['profil'][$i][1]."</td>
                         <td>".$_SESSION['profil'][$i][2]."</td>
                         <td>".$_SESSION['profil'][$i][3]."</td>
                         <td>".$_SESSION['profil'][$i][4]."</td>
                         <td>".$_SESSION['profil'][$i][5]."</td>
                         <td>".$_SESSION['profil'][$i][6]."</td></a>
                         <td><a href='index.php?action=supprimerListeProfil&id=" . $_SESSION['profil'][$i][7] . "'>&times;&ensp;</a></td>
                         </tr><tr class='line'>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td>
                         <td>&emsp;</td></tr>
                    ";}
                    } ?>
                </table>
                    <br>
                    <br>
                    <a href="index.php?action=inscriptionGestionnaire">Ajouter un compte gestionnaire d'immmeuble</a>
                    <br>
                    <a href="index.php?action=inscriptionAdmin">Ajouter un compte Admin</a>
                    <br>
                    <a href="index.php?action=inscriptionUtilisateur">Ajouter un compte Utilisateur</a>
                    <br>
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
