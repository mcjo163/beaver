<?php
include '../../private_html/config.php';
include PRIVATE_PATH . 'db.inc.php';

include PRIVATE_PATH . "generate_following.php";



$account = unserialize($_SESSION['user']);
if ($_GET['id'] == $account['user_id']) {
    $smarty -> assign('account', $account);

} else {
    $sql = "SELECT * FROM user WHERE user_id = :id";
    $stmt = $pdo -> prepare($sql);
    $stmt ->bindParam(":id", $_GET['id']);
    $stmt -> execute();

    $account = $stmt -> fetch(PDO::FETCH_ASSOC);
    $smarty -> assign('account', $account);

}

$userPlaylists = get_playlists($account['username'], $playlists);
$smarty -> assign('playlists', $userPlaylists);

$posts = get_posts($account['username'], $albums);
$smarty -> assign('posts', $posts);

$smarty -> display('account_page.tpl');