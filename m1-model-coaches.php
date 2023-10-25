<?php

function selectCoaches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coaches_id, coach_name, coach_position, coach_age FROM `coaches`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCoaches($cName, $cAgegroup, $cAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `coaches` (`coach_name`, `coach_position`, `coach_age`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $cName, $cAgegroup, $cAge);
        $succcess = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCoaches($cName, $cAgegroup, $cAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `coaches` (`coach_name`, `coach_position`, `coach_age`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $cName, $cAgegroup, $cAge);
        $succcess = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCoaches($cName, $cAgegroup, $cAge, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `coaches` (`coach_name`, `coach_position`, `coach_age`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $cName, $cAgegroup, $cAge);
        $succcess = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
