<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newAlbumModal">
   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newAlbumModal" tabindex="-1" aria-labelledby="newAlbumModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newAlbumModalLabel">New Album</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="alName" class="form-label">Album Name</label>
            <input type="text" class="form-control" id="alName" name="alName">
          </div>
          <div class="mb-3">
            <label for="tracks" class="form-label">Total Tracks</label>
            <input type="text" class="form-control" id="tracks" name="tracks">
          </div>
           <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
