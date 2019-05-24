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

    <br>

<div class = 'pro'>
<?php for ($i = 0; $i < sizeof($_SESSION['capteur']); $i++ ){
    $k = $i +1;
    if ($_SESSION['capteur'][$i][3] == 1){
        echo "<div class='container'>
              <img class='image' src='view/images/CapteurI.png'>
              <div class='overlay'>
             <div class='text'>L'alarme ".$_SESSION['capteur'][$i][0]." consomme ".$_SESSION['capteur'][$i][2]." w/h pour un prix de ".$_SESSION['capteur'][$i][1]."$ <br>";
             if (isset($_SESSION['Nom'])){
                 echo "<a href='index.php?action=noter&nom=".$_SESSION['capteur'][$i][0]."'>Notez le capteur</a>";
             }
            echo "</div></div></div>";
    } elseif ($_SESSION['capteur'][$i][3] == 2) {
        echo "<div class='container'>
            <img class='image' src='view/images/Capteur.png'>
             <div class='overlay'> 
            <div class='text'>Le capteur de température ".$_SESSION['capteur'][$i][0]." consomme ".$_SESSION['capteur'][$i][2]." w/h pour un prix de ".$_SESSION['capteur'][$i][1]."$ <br>";
                if (isset($_SESSION['Nom'])){
                    echo "<a href='index.php?action=noter&nom=".$_SESSION['capteur'][$i][0]."'>Notez le capteur</a>";
                }

              echo "</div></div></div>";
    } else {
        echo "<div class='container'>
               <img class='image' src='view/images/CapteurP.png'>
              <div class='overlay'>
              <div class='text'>La lampe connéctée ".$_SESSION['capteur'][$i][0]." consomme ".$_SESSION['capteur'][$i][2]." w/h pour un prix de ".$_SESSION['capteur'][$i][1]."$ <br>";
                if (isset($_SESSION['Nom'])){
                    echo "<a href='index.php?action=noter&nom=".$_SESSION['capteur'][$i][0]."'>Notez le capteur</a>";
                }
              echo "</div></div></div>";
    }
    if ($k%4 == 0){
        echo "</div> <br><br> <div class = 'pro'>";
    }
}
?>

    </div>
</div>
</body>
<footer>
    <?php include "template/Footer.php" ?>
</footer>

</html>

