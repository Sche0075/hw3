<?php
require_once("b1-util-db.php");
require_once("m1-model-coaches.php");

$pageTitle = "Coaches";
include "a2-view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertCoaches($_POST['cName'], $_POST['cPosition'], $POST['cAge']);
        break;    
  }
}

$coaches = selectCoaches();
include "v1-view-coaches.php";
include "a3-view-footer.php";
?>
