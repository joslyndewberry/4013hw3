<?php
require_once("util-db.php");
require_once("model-albums.php");

$pageTitle = "Albums";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
        if (insertAlbum($_POST['alName'], $_POST['tracks'])) {
          echo '<div class="alert alert-secondary" role="alert">Album Added.</div>"';
        } else {
          '<div class="alert alert-danger" role="alert">Error</div>"';
        }
      break;
      case "Delete":
        if (deleteAlbum($_POST['alid'])) {
          echo '<div class="alert alert-secondary" role="alert">Album Deleted.</div>';
        } else {
          '<div class="alert alert-danger" role="alert">Error</div>"';
        }
      break;
  }
}

$albums = selectAlbums();
include "view-albums.php";
include "view-footer.php"
?>
