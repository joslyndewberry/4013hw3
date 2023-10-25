<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertArtist($_POST['aName'])) {
        echo '<div class="alert alert-secondary" role="alert">Artist Added.</div>"';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
        case "Delete":
      if (deleteArtist($_POST['artid'])) {
        echo '<div class="alert alert-secondary" role="alert">Artist Deleted.</div>"';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
  }
}

$artists = selectArtists();
include "view-artists.php";
include "view-footer.php"
?>
