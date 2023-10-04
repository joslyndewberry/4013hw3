<?php
require_once("util-db.php");
require_once("model-artist-genre.php");

$pageTitle = "Artists";
include "view-header.php";
$artists = selectArtistGenre();
include "view-artist-genre.php";
include "view-footer.php"
?>
