
<?php
require_once("util-db.php");
require_once("model-coaches-with-players.php");

$pageTitle = "Coaches with their Players";
include "view-header.php";

$coaches = selectCoaches();
include "view-coaches-with-players.php";
include "view-footer.php";
?>
