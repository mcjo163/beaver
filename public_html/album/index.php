<?php
include '../../private_html/config.php';

$smarty -> assign('albums', $albums);
$smarty -> assign('user', $user);

// made it so that nonexistent IDs go to the list page, we can make a more elegant solution if we want
if (!count($_GET) || $_GET['id'] > count($albums)) {
    $smarty -> assign('albums_active', true);
    $smarty -> assign('list_title', 'All Albums');
    $smarty -> display('list_page.tpl');
} else {
    $album = $albums[$_GET['id']];

    $smarty -> assign('album', $album);
    $smarty -> assign('albumID', $_GET['id']);
    $smarty -> display('album_page.tpl');
}