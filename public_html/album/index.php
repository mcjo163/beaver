<?php
include '../../private_html/config.php';
include PRIVATE_PATH . "db.inc.php";
include PRIVATE_PATH . "generate_following.php";

$smarty -> assign('user', unserialize($_SESSION['user']));

$sql = 'SELECT * FROM album JOIN artist on artist_id = artist_fk ORDER BY album_name';
$albums = $pdo -> prepare($sql);
$albums -> execute();
$smarty -> assign('albums', $albums);

// made it so that nonexistent IDs go to the list page, we can make a more elegant solution if we want
if (!count($_GET) || $_GET['id'] > $albums->rowCount()) {
    $smarty -> assign('albums_active', true);
    $smarty -> assign('list_title', 'All Albums');

    $smarty -> display('list_page.tpl');
} else {
    $sql = 'SELECT * FROM album JOIN artist on artist_id = artist_fk JOIN user ON user_id = user_fk WHERE album_id = ' . $_GET['id'];
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();
    $album = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = 'SELECT * FROM song WHERE album_fk = ' . $_GET['id'] . ' ORDER BY song_order';
    $songs = $pdo -> prepare($sql);
    $songs -> execute();



    $smarty -> assign('album', $album);
    $smarty -> assign('songs', $songs);
    $smarty -> display('album_page.tpl');
}