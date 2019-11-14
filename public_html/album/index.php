<?php
include '../../private_html/config.php';

$smarty -> assign('albums', $albums);
$smarty -> assign('user', $user);

if (!count($_GET)) {
    $smarty -> assign('albums_active', true);
    $smarty -> assign('list_title', 'All Albums');
    $smarty -> display('list_page.tpl');
} else {
    $album = $albums[$_GET['id']];

    $smarty -> assign('album', $album);
    $smarty -> display('album_page.tpl');
}