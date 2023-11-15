<?php
require_once("util-db.php");
require_once("model/albums-chart.php");

$pageTitle = "Albums Chart";
include "view/header.php";
$albums = selectAlbums();
include "view/albums-chart/page.php";
include "view/footer.php"
?>
