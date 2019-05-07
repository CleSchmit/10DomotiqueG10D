<?php session_start();

include_once "model/function.php";
include_once "model/connexion.class.php";
$bdd = bdd();

ob_start();

$Prenom = $_SESSION['Prenom'];
$Nom = $_SESSION['Nom'];

$body="<br><div id=\"CProfil\">

            <div class='headerprofil'>
                <ul class=\"Option\">
                    <li><a href='index.php?action=deconnexion'><img class=\"dec\" src=\"view/images/deco.png\"></a></li>
                    <li><a href='index.php?action=ProfilModif'><img class=\"dec\"  src=\"view/images/Modif.png\"></a></li>
                </ul>
                <br>
                <br>
                <br>
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