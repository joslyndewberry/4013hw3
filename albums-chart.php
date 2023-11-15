<?php
require_once("util-db.php");
require_once("model/artists-chart.php");

$pageTitle = "Albums Chart";
include "view/header.php";
$artists = selectArtists();
include "view/albums-chart/page.php";
include "view/footer.php"
?>
