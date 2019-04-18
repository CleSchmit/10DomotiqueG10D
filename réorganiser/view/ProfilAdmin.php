<?php session_start();

include_once "model/function.php";
include_once "model/connexion.class.php";
$bdd = bdd();

ob_start();

$Prenom = $_SESSION['Prenom'];
$Nom = $_SESSION['Nom'];

$body="<br><div id=\"CProfil\">

            <div class='headerprofil'>
                <div class='deco'><a href='index.php?action=deconnexion'>Deconnexion &emsp;</a> </div>
                <div class='deco'><a href='index.php?action=ProfilModif'>Modifier le Profil &emsp;</a> </div>
                <img class=\"imgprofil\" src=\"view/images/Boss.jpg\">
                <h1>
                    Compte Administrateur de $Prenom $Nom                                        
                </h1>
            </div>
            <div class='corpsProfil'><br>
                <h2>Compte Administrateur</h2>
                
            </div>
        </div><br>";


require("template/template.php"); ?>