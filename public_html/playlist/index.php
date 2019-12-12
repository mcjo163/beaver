<?php
include '../../private_html/config.php';
include PRIVATE_PATH . 'db.inc.php';
include PRIVATE_PATH . "generate_following.php";

$smarty -> assign('playlists', $playlists);
$smarty -> assign('user', $user);

$playlist = $playlists[$_GET['id']];
$smarty -> assign('playlist', $playlist);
$smarty -> display('playlist_page.tpl');