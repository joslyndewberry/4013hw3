<?php
require_once("util-db.php");
require_once("model/songs.php");

$pageTitle = "Songs";
include "view/header.php";
$songs = selectSongs();
include "view/songs/page.php";
include "view/footer.php"
?>
