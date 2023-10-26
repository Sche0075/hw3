<?php
require_once("b1-util-db.php");
require_once("m6-model-leagues.php");

$pageTitle = "Leagues";
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

    case "Edit":
     if (updateCoaches($_POST['cName'], $_POST['cPosition'], $_POST['cAge'], $_POST['cid'])) {
       echo '<div class="alert alert-success" role="alert">Course edited.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
   
    case "Delete":
     if (deleteCoaches($_POST['cid'])) {
       echo '<div class="alert alert-success" role="alert">Course deleted.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
    
  }  
}

$leagues = selectLeagues();
include "v6-view-leagues.php";
include "a3-view-footer.php";
?>
