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
				<u2>
                    <li1><a href=\"index.php?action=ListeCapteur\">Liste capteur</a></li1>
                    <li1><a href=\"#news\">Créer compte gestionnaire d'immmeuble</a></li1>
                    <li1><a href=\"#contact\">Accéder aux profils</a></li1>
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
