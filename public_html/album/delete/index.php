<?php
include '../../../private_html/config.php';
require_once PRIVATE_PATH . "db.inc.php";
$album = $_GET['id'];
$sql = "DELETE FROM SONG WHERE album_fk = $album";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$sql = "DELETE FROM album WHERE album_id = $album";
$stmt = $pdo->prepare($sql);
$stmt->execute();

ob_start();
header("location: " . WEB_URL . "/album/");
ob_end_flush();
exit();








