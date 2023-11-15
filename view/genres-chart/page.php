<h1>Genres Chart</h1>

<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
    datasets: [{
        barPercentage: 0.5,
        barThickness: 100,
        maxBarThickness: 100,
        minBarLength: 2,
        label: 'Genres',
        data: [
<?php
while ($genre = $genres->fetch_assoc()) {
  echo $genre['num_songs'] . ", ";
}
?>
          ]
      backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
     <?php
      $genres = selectGenres();
        while ($genre = $genres->fetch_assoc()) {
          echo "'" . $genre['genre_name'] . "', ";
        }
      ?>
    ]
},
options: {
  indexAxis: 'y',
}
});
</script>
