<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT artist_id, artist_name FROM `artist`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertArtist($aName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO 'artist' ('artist_name') VALUES (?)");
        $stmt->bind_param("s", $aName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateArtist($aname, $artid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update 'artist' set 'artist_name'=? where artist_id = ?");
        $stmt->bind_param("si", $aname, $artid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteArtist($artid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from artist where artist_id = ?");
        $stmt->bind_param("i", $artid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
