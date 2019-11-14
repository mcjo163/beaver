<?php
include '../../../private_html/config.php';

$smarty -> assign('albums', $albums);
$smarty -> assign('user', $user);

$album = $albums[$_GET['id']];

$smarty -> assign('album', $album);
$smarty -> display('edit_album_page.tpl');
