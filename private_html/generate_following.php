<?php
// generate the following albums for the currently logged in user
if (isset($_SESSION['user'])) {
    $sql = "SELECT *
            FROM user_favorite_album 
            JOIN album ON album_id = album_fk
            JOIN artist ON artist_fk = artist_id
            WHERE user_favorite_album.user_fk = :id";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindParam(":id", unserialize($_SESSION['user'])['user_id']);
    $stmt -> execute();
    $favorite = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    $smarty -> assign('favorite', $favorite);
}