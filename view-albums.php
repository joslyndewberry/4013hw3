<h1>Albums</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Total Tracks</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $album['album_id']; ?></td>
    <td><?php echo $album['album_name']; ?></td>
    <td><?php echo $album['total_tracks']; ?></td>
    <td>
      <form method="post" action="songs-in-album.php">
        <input type="hidden" name="sid" value="<?php echo $album['album_id']; ?>">
        <button type="submit" class="btn btn-primary">Songs</button>
      </form>
    </td>
  </tr>
<?php 
}
      ?>
    </tbody>
  </table>
</div>
