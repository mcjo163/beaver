<?php
include '../../private_html/config.php';
include PRIVATE_PATH . 'db.inc.php';
include PRIVATE_PATH . "generate_following.php";


$user = unserialize($_SESSION['user']);
$smarty->assign('user', $user);

if (!count($_GET)) {
    // get list of artists from database
    $stmt = $pdo->prepare("SELECT artist_name, artist_id
                           FROM artist 
                           ORDER BY artist_name");
    $stmt->execute();

    $artists = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $artists[] = array('artist_name'=>$row['artist_name'], 'artist_id'=>$row['artist_id'], 'alpha'=>"");
    }

    $artists_alphabetized = array();
    foreach ($artists as $artist) {
        $alpha = strtoupper(substr($artist['artist_name'], 0, 1));
        if (array_key_exists($alpha, $artists_alphabetized)) {
            array_push($artists_alphabetized[$alpha], $artist);
        } else {
            $artists_alphabetized[$alpha] = array($artist);
        }
    }

    $smarty -> assign('artists', $artists_alphabetized);
    $smarty -> assign('artists_active', true);
    $smarty -> display('artists.tpl');
} else {

    $sql = "SELECT * FROM album
            JOIN artist ON artist_id = artist_fk
            WHERE artist_id = :id";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindParam(":id", $_GET['a']);
    $stmt -> execute();
    $artist_albums = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT artist_name FROM artist
            WHERE artist_id = :id";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindParam(":id", $_GET['a']);
    $stmt -> execute();
    $artist = $stmt -> fetch(PDO::FETCH_ASSOC);
    $artist = $artist['artist_name'];

    $smarty -> assign('albums', $artist_albums);
    $smarty -> assign('list_title', "Albums by $artist");
    $smarty -> display('list_page.tpl');
}