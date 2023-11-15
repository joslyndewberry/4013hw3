<?php
require_once("util-db.php");
require_once("model/album-genre.php");

$pageTitle = "Album Genre";
include "view/header.php";
$albums = selectAlbumGenre();
include "view/album-genre/page.php";
include "view/footer.php"
?>
