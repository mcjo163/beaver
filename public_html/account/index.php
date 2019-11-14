<?php
include '../../private_html/config.php';

$smarty -> assign('user', $user);

$account = $accounts[$_GET['id']];
$smarty -> assign('account', $account);

$userPlaylists = get_playlists($account['username'], $playlists);
$smarty -> assign('playlists', $userPlaylists);

$posts = get_posts($account['username'], $albums);
$smarty -> assign('posts', $posts);




$smarty -> display('account_page.tpl');

