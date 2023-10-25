<?php
require_once("b1-util-db.php");
require_once("m6-model-leagues.php");

$pageTitle = "Leagues";
include "a2-view-header.php";

$leagues = selectLeagues();
include "v6-view-leagues.php";
include "a3-view-footer.php";
?>
