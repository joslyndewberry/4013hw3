<?php
function selectSongsInAlbum($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare(""SELECT song_id, song_name, duration FROM `song`s join album al on al.album_id = s.album_id WHERE s.album_id=?");
        $stmt->bind_param("i", $sid);
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
