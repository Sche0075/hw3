<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'scheetzo_hw3user01', 'QG+dgRS!Q@o.', 'scheetzo_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
