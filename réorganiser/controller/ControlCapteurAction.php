<?php

include_once 'model/capteurAction.php';

if (isset($_POST['Alarm']) == "on"){
    $_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][2] = 1;
    $CaptAction = new capteurAction($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][0], 1);
}else{
    $_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][2] = -1;
    $CaptAction = new capteurAction($_SESSION['Maison'][$_GET['Maison']][2][$_GET['Piece']][2][$_GET['Capteur']][0], -1);
}
if ($CaptAction->modifValue()){
    header('Location: index.php?action=CapteurAction&Maison='.$_GET["Maison"].'&Piece='.$_GET["Piece"].'&Capteur='.$_GET["Capteur"].'');
}