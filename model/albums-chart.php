<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT album_name, total_tracks FROM album");
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
