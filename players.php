<?php
require_once("util-db.php");
require_once("model-playerss.php");

$pageTitle = "Players";
include "view-header.php";

$player = selectPlayer();
include "view-players.php";
include "view-footer.php";
?>
