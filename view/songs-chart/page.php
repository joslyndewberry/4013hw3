
<h1>Songs Charts</h1>

<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
     labels: [
     <?php
      $artists = selectArtists();
        while ($artist = $artists->fetch_assoc()) {
          echo "'" . $artist['artist_name'] . "', ";
        }
      ?>
    ],
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
    }]
},
});
</script>
