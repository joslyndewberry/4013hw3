<?php
function selectSongsByArtist($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.genre_id, genre_name, album_name, song_id, song_name, duration, s.album_id FROM genre g join song s on s.genre_id=g.genre_id join album al on al.album_id = s.album_id join artist a on a.artist_id = al.artist_id where al.artist_id=?");
        $stmt->bind_param("i", $aid);
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
