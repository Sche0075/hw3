<?php
require_once("b1-util-db.php");
require_once("m4-model-team-by-player.php");

$pageTitle = "Teams by Players";
include "a2-view-header.php";

$teams = selectTeamByPlayer($_POST['cid']);
include "v4-view-team-by-player.php";
include "a3-view-footer.php";
?>
