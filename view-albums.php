<div class="row">
  <div class="col">
    <h1>Albums</h1>
  </div>
  <div class="col-auto">
   <?php
    Include "view-albums-newform.php";
    ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Total Tracks</th>
        <th></th>
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
    <td>
      <form method="post" action="">
        <input type="hidden" name="alid" value="<?php echo $album['album_id']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
          </svg>
        </button>
      </form>
    </td>
  </tr>
<?php 
}
      ?>
    </tbody>
  </table>
</div>
