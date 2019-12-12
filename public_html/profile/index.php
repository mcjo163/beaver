<?php
include '../../private_html/config.php';
include PRIVATE_PATH . "db.inc.php";

//session_start();
$id = $_SESSION['id'];

$sql = "SELECT * FROM User WHERE user_id = $id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$username = $user['username'];
$smarty -> assign('account', $username);

$email = $user['email_address'];
$smarty -> assign('email', $email);

//$id = $_GET['id'];
$smarty -> assign('id', $id);

$sql = "SELECT * FROM playlist WHERE user_fk = $id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$playlist = $stmt->fetch(PDO::FETCH_ASSOC);


if($stmt->rowCount() == 0){
    $check = TRUE;
    $smarty ->assign('noPlaylist', $check);
} else {
    $smarty->assign('amount', $amount);
    $smarty->assign('playlistID', $playlist['playlist_id']);
    $smarty->assign('playlistName', $playlist['playlist_name']);
}

$sql = "SELECT * FROM album WHERE user_fk = $id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
$amount = $stmt->rowCount();

//echo $id;
//echo $posts['album_name'];

$smarty -> display('profile_page.tpl');