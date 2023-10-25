<?php
require_once("b1-util-db.php");
require_once("m1-model-coaches.php");

$pageTitle = "Coaches";
include "a2-view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
     if (insertCoaches($_POST['cName'], $_POST['cPosition'], $_POST['cAge'])) {
       echo '<div class="alert alert-success" role="alert">Course added.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
  }  
}

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Edit":
     if (updateCoaches($_POST['cName'], $_POST['cPosition'], $_POST['cAge'], $_POST['cid'])) {
       echo '<div class="alert alert-success" role="alert">Course edited.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
  }  
}


$coaches = selectCoaches();
include "v1-view-coaches.php";
include "a3-view-footer.php";
?>
