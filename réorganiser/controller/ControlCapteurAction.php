<?php

include_once 'model/capteurAction.php';

if (isset($_GET['Maison']) and isset($_GET['Piece']) and isset($_GET['Capteur'])){
    if ($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][3] == 1){
        if ($_GET['Alarm']== "on"){
            $_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][2] = 1;
            $CaptAction = new capteurAction($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][0], 1);
            if ($CaptAction->modifValue()){
                header('Location: index.php?action=CapteurAction&Maison='.$_GET["Maison"].'&Piece='.$_GET["Piece"].'&Capteur='.$_GET["Capteur"].'');
            }
        }else if($_GET['Alarm']== "off"){
            $_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][2] = -1;
            $CaptAction = new capteurAction($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][0], -1);
            if ($CaptAction->modifValue()){
                header('Location: index.php?action=CapteurAction&Maison='.$_GET["Maison"].'&Piece='.$_GET["Piece"].'&Capteur='.$_GET["Capteur"].'');
            }
        }
    }
    if ($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][3] == 2){
        if (isset($_POST['Temp'])) {
            $_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][2] = $_POST['Temp'];
            $CaptAction = new capteurAction($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][0], $_POST['Temp']);
            if ($CaptAction->modifValue()) {
                header('Location: index.php?action=CapteurAction&Maison=' . $_GET["Maison"] . '&Piece=' . $_GET["Piece"] . '&Capteur=' . $_GET["Capteur"] . '');
            }
        }
    }

    if ($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][3] == 3){
        if ($_GET['Lum']== "on"){
            $_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][2] = 1;
            $CaptAction = new capteurAction($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][0], 1);
            if ($CaptAction->modifValue()){
                header('Location: index.php?action=CapteurAction&Maison='.$_GET["Maison"].'&Piece='.$_GET["Piece"].'&Capteur='.$_GET["Capteur"].'');
            }
        }else if($_GET['Lum']== "off"){
            $_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][2] = -1;
            $CaptAction = new capteurAction($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][0], -1);
            if ($CaptAction->modifValue()){
                header('Location: index.php?action=CapteurAction&Maison='.$_GET["Maison"].'&Piece='.$_GET["Piece"].'&Capteur='.$_GET["Capteur"].'');
            }
        }
    }
}



