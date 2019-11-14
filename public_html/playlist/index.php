<?php
include '../../private_html/config.php';

$smarty -> assign('playlists', $playlists);
$smarty -> assign('user', $user);

$playlist = $playlists[$_GET['id']];
$smarty -> assign('playlist', $playlist);
$smarty -> display('playlist_page.tpl');