<?php
include_once 'controller/ControlDataConso.php';
?>

<html>
<head>
    <title>10Domotique</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
    <?php include "template/Header.php" ?>
</header>

<p id="demo"></p>
<canvas id="myChart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
    var d = new Date();
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'line',
        data: {
        labels: [for (i = d.getMonth(); i > 0; i--) {months[d.getMonth()-i+1]}],
            datasets: [{
            label: 'Consommation en W/h',
                backgroundColor: 'rgb(144, 141, 140)',
                borderColor: 'rgb(0, 0, 0)',
                data: <?php echo"$data";
                }]
                },
                options: {}
                });
</script>

<footer>
    <?php include "template/Footer.php" ?>
</footer>
</body>
</html>
