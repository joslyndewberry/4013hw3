
<h1>Artists Charts</h1>

<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
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

<div>
  <canvas id="myChart"></canvas>
</div>

<script>
  const ctx = document.getElementById('myChart');


  new Chart(ctx, {
    type: 'pie',
    data: {
    datasets: [{
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
