<h1>Songs by Artist</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Duration</th>
        <th>Genre</th>
        <th>Album</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($song = $songs->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $song['song_id']; ?></td>
    <td><?php echo $song['song_name']; ?></td>
    <td><?php echo $song['duration']; ?></td>
    <td><?php echo $song['genre_name']; ?></td>
    <td><?php echo $song['album_name']; ?></td>
  </tr>
<?php 
}
      ?>
    </tbody>
  </table>
</div>
