<?php
require_once("util-db.php");
require_once("model-players-by-coaches.php");

$pageTitle = "Players by Coaches";
include "view-header.php";

$players = selectPlayersByCoaches($_GET['id']);
include "view-players-by-coaches.php";
include "view-footer.php";
?>
