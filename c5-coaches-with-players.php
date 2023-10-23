
<?php
require_once("b1-util-db.php");
require_once("m5-model-coaches-with-players.php");

$pageTitle = "Coaches with their Players";
include "a2-view-header.php";

$coaches = selectCoaches();
include "v5-view-coaches-with-players.php";
include "a3-view-footer.php";
?>
