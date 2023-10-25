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
        $stmt = $conn->prepare("update `coaches` set (`coach_name`, `coach_position`, `coach_age`) VALUES (?, ?, ?)");
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
        $stmt = $conn->prepare("INSERT INTO `coaches` set `coach_name` = ?, `coach_position` = ?, `coach_age` = ? where coaches_id = ?");
        $stmt->bind_param("sssi", $cName, $cAgegroup, $cAge, $cid);
        $succcess = $stmt->execute();
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
        $stmt = $conn->prepare("delete from course where coaches_id = ?");
        $stmt->bind_param("i", $cid);
        $succcess = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
