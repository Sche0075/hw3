<?php

function selectLeagues() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT league_id, league_director, league_agegroup, league_level FROM `league`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertLeagues($lDirector, $lAgegroup, $lLevel) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `league` (`league_director`, `league_agegroup`, `league_level`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $lDirector, $lAgegroup, $lLevel);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateLeagues($lDirector, $lAgegroup, $lLevel, $lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `league` set `league_director` = ?, `league_agegroup` = ?, `league_level` = ? where league_id = ?");
        $stmt->bind_param("sssi", $lDirector, $lAgegroup, $lLevel, $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteLeagues($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from league where league_id = ?");
        $stmt->bind_param("i", $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
