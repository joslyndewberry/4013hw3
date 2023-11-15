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
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each horizontal bar to be 2px wide
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
    responsive: true,
    plugins: {
      legend: {
        position: 'right',
      },
      title: {
        display: true,
        text: 'Chart.js Horizontal Bar Chart'
      }
    }
  },
});
</script>
