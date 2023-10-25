<?php
require_once("util-db.php");
require_once("model-albums.php");

$pageTitle = "Albums";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      insertAlbum($_POST['alName'], $_POST['tracks']);
      break;
  }
}

$albums = selectAlbums();
include "view-albums.php";
include "view-footer.php"
?>
