
<h1>Total Songs by Artists Bar Chart</h1>

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
        label: 'Artists',
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
