<?php
require_once("b1-util-db.php");
require_once("m3-model-players-by-coaches.php");

$pageTitle = "Players by Coaches";
include "a2-view-header.php";

$players = selectPlayersByCoaches($_GET['id']);
include "v3-view-players-by-coaches.php";
include "a3-view-footer.php";
?>
