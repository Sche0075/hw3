<?php
require_once("b1-util-db.php");
require_once("m2-model-players.php");

$pageTitle = "Players";
include "a2-view-header.php";

$players = selectPlayers();
include "v2-view-players.php";
include "a3-view-footer.php";
?>
