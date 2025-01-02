<!DOCTYPE html>
<html>
<head>
    <title>Graph Page</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div>
        <h2>Average Ticket Prices by Match Type</h2>
        <canvas id="ticketPriceChart"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('ticketPriceChart').getContext('2d');
        const ticketPriceChart = new Chart(ctx, {
            type: 'bar', // Use 'line' for a line chart
            data: {
                labels: @json($matchTypes), // Match types from the database
                datasets: [{
                    label: 'Average Ticket Price',
                    data: @json($avgTicketPrices), // Corresponding ticket prices
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
