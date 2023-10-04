<h1>Artists</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>ID</th>
      <th>Name</th>
      </tr>
    </thead>
    <tbody>
      <?php>
while ($artist = $artists->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $artists['artist_id']; ?></td>
    <td><?php echo $artists['artist_name']; ?></td>
  </tr>
  <?php
  
}
      ?>
    </tbody>
  </table>
</div>
