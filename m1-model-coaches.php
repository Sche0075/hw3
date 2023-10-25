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

function insertCoaches($cName, $cPosition, $cAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `coaches` (`coach_name`, `coach_position`, `coach_age`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $cName, $cPosition, $cAge);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCoaches($cName, $cPosition, $cAge, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `coaches` set `coach_name` = ?, `coach_position` = ?, `coach_age` = ? where coaches_id = ?");
        $stmt->bind_param("sssi", $cName, $cPosition, $cAge, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCoaches($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from coaches where coaches_id = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
