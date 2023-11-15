<?php
require_once("util-db.php");
require_once("model/artists-chart.php");

$pageTitle = "Artists Chart";
include "view/header.php";
$artists = selectArtists();
include "view/artists-chart/page.php";
include "view/footer.php"
?>
