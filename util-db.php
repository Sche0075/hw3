<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.68.5.11', 'scheetzo_hw3user', 'Lance4906!!!', 'scheetzo_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
