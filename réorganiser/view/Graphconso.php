
<canvas id="myChart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
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