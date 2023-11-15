
<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT artist_name, count(song_id) as num_songs, album_name, total_tracks FROM song s join album al on al.album_id = s.album_id join artist a on a.artist_id = al.artist_id group by artist_name, album_name, total_tracks");
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
