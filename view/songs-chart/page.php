
<h1>Songs Charts</h1>

<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
   data = {
    labels: ['One OK ROCK', 'Lisa'],
    datasets: [{
    label: 'My First Dataset',
    data: [65, 59],
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(201, 203, 207)'
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
  },
});
</script>
