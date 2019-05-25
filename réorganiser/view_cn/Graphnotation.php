<?php session_start();
include_once 'controller/ControlListeNote.php';
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
<canvas id="myChart" class="chartjs" width="350" height="100" style="display: block; height: 185px; width: 370px;"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($_SESSION['liste2']); ?>,
            datasets: [{
<<<<<<< HEAD
                label: '传感器的评分(5分制）',
=======
                label: 'note des capteurs sur /5',
>>>>>>> 3fdea7497064e72e7b4a0074a3c58b2a037c0392
                data: <?php echo json_encode($_SESSION['liste1']); ?>,
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                            beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<footer>
    <?php include "template/Footer.php" ?>
</footer>
</body>
</html>
