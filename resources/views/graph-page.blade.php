<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphs</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .chart-container {
            max-width: 600px;
            margin: 0 auto 40px;
        }
        canvas {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <h1>Graphs</h1>

    <!-- Pie Chart -->
    <div class="chart-container">
        <canvas id="genderChart"></canvas>
    </div>
    <script>
        const genderCtx = document.getElementById('genderChart').getContext('2d');
        new Chart(genderCtx, {
            type: 'pie',
            data: {
                labels: {!! json_encode($genderLabels) !!},
                datasets: [{
                    label: 'Gender Distribution',
                    data: {!! json_encode($genderCounts) !!},
                    backgroundColor: ['#FF6384', '#36A2EB'],
                }]
            }
        });
    </script>

    <!-- Line Chart -->
    <div class="chart-container">
        <canvas id="ticketPriceChart"></canvas>
    </div>
    <script>
        const priceCtx = document.getElementById('ticketPriceChart').getContext('2d');
        new Chart(priceCtx, {
            type: 'line',
            data: {
                labels: {!! json_encode($priceDates) !!},
                datasets: [{
                    label: 'Average Ticket Price',
                    data: {!! json_encode($averagePrices) !!},
                    borderColor: '#FF6384',
                    fill: false,
                }]
            }
        });
    </script>

    <!-- Bar Chart -->
    <div class="chart-container">
        <canvas id="passChart"></canvas>
    </div>
    <script>
        const passCtx = document.getElementById('passChart').getContext('2d');
        new Chart(passCtx, {
            type: 'bar',
            data: {
                labels: ['Male', 'Female'],
                datasets: [
                    {
                        label: 'With Pass',
                        data: [{!! $maleWithPass !!}, {!! $femaleWithPass !!}],
                        backgroundColor: '#36A2EB',
                    },
                    {
                        label: 'Without Pass',
                        data: [{!! $maleWithoutPass !!}, {!! $femaleWithoutPass !!}],
                        backgroundColor: '#FF6384',
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' }
                }
            }
        });
    </script>

    <!-- Doughnut Chart -->
    <div class="chart-container">
        <canvas id="matchTypeChart"></canvas>
    </div>
    <script>
        const matchCtx = document.getElementById('matchTypeChart').getContext('2d');
        new Chart(matchCtx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($matchTypes) !!},
                datasets: [{
                    label: 'Match Types',
                    data: {!! json_encode($matchCounts) !!},
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            }
        });
    </script>
</body>
</html>