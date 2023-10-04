<h1>Artists</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Total Tracks</th>
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
  </tr>
<?php 
}
      ?>
    </tbody>
  </table>
</div>
