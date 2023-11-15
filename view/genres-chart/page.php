<h1>Total Songs in Genres Chart</h1>

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
        barThickness: 120,
        maxBarThickness: 120,
        minBarLength: 2,
        label: 'Genres',
        data: [
<?php
while ($genre = $genres->fetch_assoc()) {
  echo $genre['num_songs'] . ", ";
}
?>
          ]
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
