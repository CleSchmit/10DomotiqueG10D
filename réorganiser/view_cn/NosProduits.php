<?php session_start();
include_once 'controller/ControlListeCapteur2.php';

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
             <div class='text'>警铃 ".$_SESSION['capteur'][$i][0]." 消耗 ".$_SESSION['capteur'][$i][2]." 单位 w/h 的价格 ".$_SESSION['capteur'][$i][1]."$ <br>";
        if (isset($_SESSION['Nom'])){
            echo "<a href='index.php?action=noter&nom=".$_SESSION['capteur'][$i][0]."'>评价传感器</a>";
        }
        echo "</div></div></div>";
    } elseif ($_SESSION['capteur'][$i][3] == 2) {
        echo "<div class='container'>
            <img class='image' src='view/images/Capteur.png'>
             <div class='overlay'> 
            <div class='text'>远程控制台灯 ".$_SESSION['capteur'][$i][0]." 消耗 ".$_SESSION['capteur'][$i][2]." 单位 w/h 的价格 ".$_SESSION['capteur'][$i][1]."$ <br>";
        if (isset($_SESSION['Nom'])){
            echo "<a href='index.php?action=noter&nom=".$_SESSION['capteur'][$i][0]."'>评价传感器</a>";
        }

        echo "</div></div></div>";
    } else {
        echo "<div class='container'>
               <img class='image' src='view/images/CapteurP.png'>
              <div class='overlay'>
              <div class='text'>远程控制台灯 ".$_SESSION['capteur'][$i][0]." 消耗 ".$_SESSION['capteur'][$i][2]." 单位 w/h 的价格 ".$_SESSION['capteur'][$i][1]."$ <br>";
        if (isset($_SESSION['Nom'])){
            echo "<a href='index.php?action=noter&nom=".$_SESSION['capteur'][$i][0]."'>评价传感器</a>";
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
<p>
</br></br></br>
</p>
<footer>
    <?php include "template/Footer.php" ?>
</footer>

</html>

