<?php
include "../../private_html/config.php";
include PRIVATE_PATH . 'db.inc.php';
include PRIVATE_PATH . "generate_following.php";


$query = htmlspecialchars($_GET['q']);

$smarty -> assign('user', $user);
$smarty -> assign('query', $query);

// get album results from db
$sql = "SELECT album_id, album_name, artist_name 
        FROM album
            JOIN artist ON artist_fk = artist_id
        WHERE album_name LIKE '%$query%'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$album_results = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $album_results[] = $row;
}

// get artist results from db
$sql = "SELECT *
        FROM artist
        WHERE artist_name LIKE '%$query%'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$artist_results = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $artist_results[] = $row;
}

// get song results from db
$sql = "SELECT song_name, album_id, album_name, artist_name 
        FROM song 
            JOIN album ON album_fk = album_id 
            JOIN artist ON artist_fk = artist_id 
        WHERE song_name LIKE '%$query%'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$song_results = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $song_results[] = $row;
}

$smarty -> assign('album_results', $album_results);
$smarty -> assign('artist_results', $artist_results);
$smarty -> assign('song_results', $song_results);


$smarty -> display('results.tpl');