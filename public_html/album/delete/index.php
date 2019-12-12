<?php
include '../../../private_html/config.php';
require_once PRIVATE_PATH . "db.inc.php";

$album = $_GET['id'];
$sql = "SELECT artist_fk FROM album WHERE album_id = :id";
$stmt = $pdo->prepare($sql);
$stmt -> bindParam(":id", $album);
$stmt-> execute();

$artist_id = $stmt ->fetch(PDO::FETCH_ASSOC);

$sql = "DELETE FROM SONG WHERE album_fk = :id";
$stmt = $pdo->prepare($sql);
$stmt -> bindParam(":id", $album);
$stmt-> execute();

$sql = "DELETE FROM album WHERE album_id = :id";
$stmt = $pdo->prepare($sql);
$stmt -> bindParam(":id", $album);
$stmt-> execute();

// checks if the last artist's album was deleted
$sql = "SELECT count(*) AS album_count FROM album WHERE artist_fk = :id";
$stmt = $pdo->prepare($sql);
$stmt -> bindParam(":id", $artist_id['album_count']);
$stmt-> execute();

$album_count = $stmt -> fetch(PDO::FETCH_ASSOC);

if ($album_count['album_count'] == 0) {
    $sql = "DELETE FROM artist WHERE artist_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindParam(":id", $artist_id['album_count']);
    $stmt-> execute();
}

ob_start();
header("location: " . WEB_URL . "/album/");
ob_end_flush();
exit();








