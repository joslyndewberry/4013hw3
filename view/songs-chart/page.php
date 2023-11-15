
<h1>Songs Charts</h1>

<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

    $labels = ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'];
    $data = [12, 19, 3, 5, 2];

    $labels_json = json_encode($labels);
    $data_json = json_encode($data);
    ?>

    <script>
        var data = {
            labels: <?php echo $labels_json; ?>,
            datasets: [{
                label: 'Sample Bar Chart',
                data: <?php echo $data_json; ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        var ctx = document.getElementById('myBarChart').getContext('2d');

        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
