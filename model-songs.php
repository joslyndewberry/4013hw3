<?php
function selectSongs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT song_id, album_id, genre_id, song_name, duration FROM `song`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSong($sName, $length) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `song` (`song_name`, `duration`) VALUES (?, ?)");
        $stmt->bind_param("ss", $sName, $length);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateArtist($sName, $length, $songid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update 'song' set 'song_name'=?, 'duration'=? where artist_id = ?");
        $stmt->bind_param("ssi", $sName, $length, $songid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteArtist($songid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from song where song_id = ?");
        $stmt->bind_param("i", $songid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
