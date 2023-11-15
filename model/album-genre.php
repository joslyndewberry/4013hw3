<?php
function selectAlbumGenre() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select DISTINCT g.genre_id, al.album_id, genre_name, album_name, artist_name, total_tracks FROM genre g join song s on s.genre_id=g.genre_id join album al on al.album_id = s.album_id join artist a on a.artist_id = al.artist_id");
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
