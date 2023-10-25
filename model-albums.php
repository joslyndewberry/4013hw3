<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT album_id, album_name, total_tracks FROM `album`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertAlbum($alName, $tracks) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `album` (`artist_name`, `total_tracks`) VALUES (?, ?)");
        $stmt->bind_param("si", $alName, $tracks);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAlbum($alName, $tracks, $alid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update 'album' set 'album_name'= ?, 'total_tracks' = ? where album_id = ?");
        $stmt->bind_param("sii", $alName, $tracks, $alid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAlbum($alid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from album where album_id = ?");
        $stmt->bind_param("i", $alid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
