<?php
function selectAlbumsByArtist($alid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT al.album_id, album_name, total_tracks FROM `album` al join artist a on a.artist_id = al.artist_id WHERE al.artist_id=?");
        $stmt->bind_param("i", $alid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
