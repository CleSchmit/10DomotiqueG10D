<?php session_start();
include_once 'controller/ControlListeCapteur.php';

$bdd = bdd();
?>
<html>
<head>
    <title>10Domotique</title>
    <link rel="stylesheet" href="view/style.css" />
</head>

<header>
    <?php include "template/Header.php" ?>
</header>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .pro {
        display: flex;
        justify-content: space-around;
    }

    .container {
        position: relative;
        width: auto;
        height: auto;
    }

    .image {
        display: inline-block;
        width: 125%;
        height: auto;
    }

    .overlay {
        border: solid black;
        border-radius: 42px;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: darkorange;
        overflow: hidden;
        width: 125%;
        height: 100%;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: .3s ease;
        transition: .3s ease;
    }

    .container:hover .overlay {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    .text {
        color: black;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>

    <br>

<div class = 'pro'>
<?php for ($i = 0; $i < sizeof($_SESSION['capteur']); $i++ ){
    $k = $i +1;
    if ($_SESSION['capteur'][$i][3] == 1){
        echo "<div class='container'>
              <img class='image' src='view/images/CapteurI.png'>
              <div class='overlay'>
             <div class='text'>L'alarme ".$_SESSION['capteur'][$i][0]." consomme ".$_SESSION['capteur'][$i][2]." w/h pour un prix de ".$_SESSION['capteur'][$i][1]."$ <br><a href='notation/noter.php&nom=".$_SESSION['capteur'][$i][0]."'>Notez le capteur</a>
            </div></div></div>";
    } elseif ($_SESSION['capteur'][$i][3] == 2) {
        echo "<div class='container'>
            <img class='image' src='view/images/Capteur.png'>
             <div class='overlay'> 
            <div class='text'>Le capteur de température ".$_SESSION['capteur'][$i][0]." consomme ".$_SESSION['capteur'][$i][2]." w/h pour un prix de ".$_SESSION['capteur'][$i][1]."$ <br><a href='notation/noter.php&nom=".$_SESSION['capteur'][$i][0]."'>Notez le capteur</a>
              </div></div></div>";
    } else {
        echo "<div class='container'>
               <img class='image' src='view/images/CapteurP.png'>
              <div class='overlay'>
              <div class='text'>La lampe connéctée ".$_SESSION['capteur'][$i][0]." consomme ".$_SESSION['capteur'][$i][2]." w/h pour un prix de ".$_SESSION['capteur'][$i][1]."$ <br><a href='notation/noter.php&nom=".$_SESSION['capteur'][$i][0]."'>Notez le capteur</a>
              </div></div></div>";
    }
    if ($k%4 == 0){
        echo "</div> <br><br> <div class = 'pro'>";
    }
}
?>
</div>
</body>
<footer>
    <?php include "template/Footer.php" ?>
</footer>

</html>

