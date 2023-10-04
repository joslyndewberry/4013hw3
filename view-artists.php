<h1>Artists</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
        <th></th>
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
    <td>
      <form method="post" action="albums-by-artist.php">
        <input type="hidden" name="alid" value="<?php echo $artist['artist_id']; ?>">
        <button type="submit" class="btn btn-primary">Albums</button>
      </form>
    </td>
  </tr>
<?php 
}
      ?>
    </tbody>
  </table>
</div>
