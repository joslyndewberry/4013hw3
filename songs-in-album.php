<?php
require_once("util-db.php");
require_once("model-songs-in-album.php");

$pageTitle = "Songs in Album";
include "view-header.php";
$songs = selectSongsInAlbum($_POST['sid']);
include "view-songs-in-album.php";
include "view-footer.php"
?>
