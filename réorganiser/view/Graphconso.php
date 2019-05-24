<?php session_start();
include_once 'controller/ControlDataConso.php';
include_once 'controller/ControlListeConso.php';
?>

<html>
<head>
    <title>10Domotique</title>
    <link rel="stylesheet" href="view/style.css" />
</head>
<body>
<header>
    <?php include "template/Header.php" ?>
</header>
<p id="demo"></p>
<canvas id="myChart" width="400" height="150"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'line',
        data: {
        labels: <?php echo json_encode($_SESSION['liste2']); ?>,
            datasets: [{
            label: 'Consommation en W/h',
                backgroundColor: 'rgb(144, 141, 140)',
                borderColor: 'rgb(0, 0, 0)',
                data: <?php echo json_encode($_SESSION['liste1']); ?>
                }]
                },
                });
</script>

<footer>
    <?php include "template/Footer.php" ?>
</footer>
</body>
</html>
