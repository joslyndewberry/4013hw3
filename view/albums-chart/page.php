
<h1>Albums Chart</h1>

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
        label: 'Albums',
        data: [
<?php
while ($album = $albums->fetch_assoc()) {
  echo $album['total_tracks'] . ", ";
}
?>
          ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
     <?php
      $albums = selectAlbums();
        while ($album = $albums->fetch_assoc()) {
          echo "'" . $album['album_name'] . "', ";
        }
      ?>
    ]
},
});
</script>
