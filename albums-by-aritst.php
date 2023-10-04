<?php
require_once("util-db.php");
require_once("model-albums-by-artist.php");

$pageTitle = "Albums by Artist";
include "view-header.php";
$songs = selectAlbumsByArtist($_POST['aid']);
include "view-albums-by-artist.php";
include "view-footer.php"
?>
