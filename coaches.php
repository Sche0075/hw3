<?php
require_once("util-db.php");
require_once("model-coaches.php");

$pageTitle = "Coaches";
include "view-header.php";

$coaches = selectCoaches();
include "view-instructors.php";
include "view-footer.php";
?>
