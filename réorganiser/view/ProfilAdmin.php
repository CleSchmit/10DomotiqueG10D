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
                    Compte Administrateur                                        
                </h1>
            </div>
            <div class='corpsProfil'><br>
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
                    <li1><a href=\"index.php?action=ListeCapteur\">Liste capteur</a></li1>
                    <li1><a href=\"#news\">Créer compte gestionnaire d'immmeuble</a></li1>
                    <li1><a href=\"#contact\">Accéder aux profils</a></li1>
                </u2>
        </div><br>";


require("template/template.php"); ?>