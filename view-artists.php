<div class="row">
  <div class="col">
    <h1>Artists</h1>
  </div>
  <div class="col-auto">
   <?php
    Include ="view-artists-newform.php";
    ?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($artist = $artists->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $artist['artist_id']; ?></td>
    <td><?php echo $artist['artist_name']; ?></td>
    <td><a href="songs-by-artist.php?id=<?php echo $artist['artist_id']; ?>">Songs</a></td>
  </tr>
<?php 
}
      ?>
    </tbody>
  </table>
</div>
