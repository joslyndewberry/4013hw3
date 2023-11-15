<?php
function selectGenres() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT genre_name, count(song_id) as num_songs FROM genre g join song s on  g.genre_id = s.genre_id group by genre_name");
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
