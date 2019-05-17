<?php session_start();
include_once "model/function.php";
<<<<<<< HEAD
<<<<<<< HEAD
include_once "controller/ControlProfilGestion.php";
include_once 'controller/ControlCapteurAction.php';
=======
include_once "controller/ControlDataConso.php";
>>>>>>> parent of 1a680ea... Merge branch 'master' of https://github.com/CleSchmit/10DomotiqueG10D
=======
include_once "controller/ControlDataConso.php";
>>>>>>> parent of 1a680ea... Merge branch 'master' of https://github.com/CleSchmit/10DomotiqueG10D
$bdd = bdd();

?>

<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>10Domotique</title>
    <link rel="stylesheet" href="../style.css" />
</head>
<body>

<header>
    <?php include "template/Header.php" ?>
</header>

<<<<<<< HEAD
<<<<<<< HEAD
                        echo "
                              <a href='#Maison".$i."' class='Maison'>
                                    <div class=\"ChoixMaison\"><br>&emsp;".$_SESSION['Maison'][$i][1]."&emsp;
                                        <br><br>
                                    </div>
                              </a>";
                    }?>
                </div>

                <div class="lienM"><br><a class="PrezMaison"> Graphique consommation</a><br><br></div>

                <div class="navMaisons">
                    <a href='index.php?action=Graphconso' class="lienOption"><div class="lien"><br><p>&emsp;</p>&ensp;Graphique consommation immeuble en w/h<br><br></div></a>
                </div>
=======
<div class="corps">
>>>>>>> parent of 1a680ea... Merge branch 'master' of https://github.com/CleSchmit/10DomotiqueG10D

    <br>

    <div id="CProfil">

=======
<div class="corps">

    <br>

    <div id="CProfil">

>>>>>>> parent of 1a680ea... Merge branch 'master' of https://github.com/CleSchmit/10DomotiqueG10D
        <div class='corpsProfil'>

            <div class='headerprofil'>
                <div class="nom"><br><img class="imgprofil" src="view/images/Boss.jpg">&ensp;Compte gestionnaire<br><br></div>
            </div>

        </div>

            <br>
            <br>
            <br>
            <br>

            <canvas id="myChart"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                label: 'Consommation en W/h',
                backgroundColor: 'rgb(144, 141, 140)',
                borderColor: 'rgb(0, 0, 0)',
                data: [0, 10, 5, 2, 20, 30,45]
                }]
                },

                // Configuration options go here
                options: {}
                });
            </script>
    </div>

</div>

<br>

<footer>
    <?php include "template/Footer.php" ?>
</footer>
</body>
</html>




