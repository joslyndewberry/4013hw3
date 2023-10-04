<?php
function selectSongsInAlbum($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT song_id, song_name, duration FROM `song`s FROM genre g join song s on s.genre_id=g.genre_id join album al on al.album_id = s.album_id join artist a on a.artist_id = al.artist_id WHERE s.album_id=?");
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
