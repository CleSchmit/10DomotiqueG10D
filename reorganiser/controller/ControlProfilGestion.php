<?php
include_once 'model/profilgestion.php';
$Maison = new Maison();

if (isset($_GET['Aug'])){
    if (AugmenterValeur($_GET['Aug'])){
        header("Location:index.php?action=Profil#".$_GET['Maison']."");
    }
}