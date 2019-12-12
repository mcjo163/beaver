<?php
include '../../../private_html/config.php';
include PRIVATE_PATH . "db.inc.php";
include PRIVATE_PATH . "generate_following.php";



$errors = array(
    'imageError'=>false,
    'titleError'=>false,
    'artistError'=>false,
    'yearError'=>false,
    'songError'=>false
);

$smarty -> assign('error', $errors);

$sql = "SELECT * FROM album
        JOIN artist on artist_id = artist_fk
        WHERE album_id = :id";
$album = $pdo -> prepare($sql);
$album -> bindParam(":id", $_GET['id']);
$album -> execute();
$album = $album -> fetch(PDO::FETCH_ASSOC);

$sql = "SELECT song_name FROM song WHERE album_fk = :id";
$songs = $pdo -> prepare($sql);
$songs -> bindParam(":id", $_GET['id']);
$songs -> execute();
$songs = $songs -> fetchAll(PDO::FETCH_ASSOC);

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> assign('form_type', 'edit');
$smarty -> assign('songs', $songs);
$smarty -> assign('album', $album);
$smarty -> display('edit_album_page.tpl');
