<?php
require_once("b1-util-db.php");
require_once("m6-model-leagues.php");

$pageTitle = "Leagues";
include "a2-view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
     if (insertLeagues($_POST['lDirector'], $_POST['lAgegroup'], $_POST['lLevel'])) {
       echo '<div class="alert alert-success" role="alert">League added.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    

    case "Edit":
     if (updateLeagues($_POST['lDirector'], $_POST['lAgegroup'], $_POST['lLevel'], $_POST['lid'])) {
       echo '<div class="alert alert-success" role="alert">League edited.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
   
    case "Delete":
     if (deleteLeagues($_POST['lid'])) {
       echo '<div class="alert alert-success" role="alert">League deleted.</div>';
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
