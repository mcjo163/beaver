<?php
include '../../private_html/config.php';
include PRIVATE_PATH . 'db.inc.php';

$user = unserialize($_SESSION['user']);
$smarty->assign('user', $user);

if (!count($_GET)) {
    // get list of artists from database
    $stmt = $pdo->prepare("SELECT artist_name 
                           FROM artist 
                           ORDER BY artist_name");
    $stmt->execute();

    $artists = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $artists[] = $row['artist_name'];
    }

    $artists_alphabetized = array();
    foreach ($artists as $artist) {
        $alpha = strtoupper(substr($artist, 0, 1));
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
    
    $artist = $_GET['a'];
    $artist_albums = get_albums($artist, $albums);
    print_r($artist_albums);
    $smarty -> assign('albums', $artist_albums);
    $smarty -> assign('list_title', "Albums by $artist");
    $smarty -> display('list_page.tpl');
}