<?php
require_once("util-db.php");
require_once("model-team-by-player.php");

$pageTitle = "Teams by Players";
include "view-header.php";

$teams = selectTeamByPlayer($_GET['cid']);
include "view-team-by-player.php";
include "view-footer.php";
?>
