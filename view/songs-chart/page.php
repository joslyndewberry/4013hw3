
<h1>Songs Charts</h1>

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
        barThickness: 6,
        maxBarThickness: 8,
        minBarLength: 2,
        data: [
<?php
while ($artist = $artists->fetch_assoc()) {
  echo $artist['num_songs'] . ", ";
}
?>
          ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
     <?php
      $artists = selectArtists();
        while ($artist = $artists->fetch_assoc()) {
          echo "'" . $artist['artist_name'] . "', ";
        }
      ?>
    ]
},
});
</script>