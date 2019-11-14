<?php
include '../../private_html/config.php';

$smarty -> assign('artists', $artists_alphabetized);
$smarty -> assign('user', $user);

if (!count($_GET)) {
    $smarty -> assign('artists_active', true);
    $smarty -> display('artists.tpl');
} else {
    $artist = $_GET['a'];
    $artist_albums = get_albums($artist, $albums);
    
    $smarty -> assign('albums', $artist_albums);
    $smarty -> assign('list_title', "Albums by $artist");
    $smarty -> display('list_page.tpl');
}