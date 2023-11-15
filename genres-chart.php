<?php
require_once("util-db.php");
require_once("model/genres-chart.php");

$pageTitle = "Genres Chart";
include "view/header.php";
$artists = selectGenres();
include "view/genres-chart/page.php";
include "view/footer.php"
?>
