<?php
require_once("util-db.php");
require_once("model/albums.php");

$pageTitle = "Albums";
include "view/header.php";
$albums = selectAlbums();
include "view/albums/page.php";
include "view/footer.php"
?>
