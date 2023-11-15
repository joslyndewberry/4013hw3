<?php
require_once("util-db.php");
require_once("model/artists-chart.php");

$pageTitle = "Songs Chart";
include "view/header.php";
$artists = selectArtists();
include "view/songs-chart/page.php";
include "view/footer.php"
?>
