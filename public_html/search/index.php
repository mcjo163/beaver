<?php
include "../../private_html/config.php";

$query = htmlspecialchars($_GET['q']);

$smarty -> assign('albums', $albums);
$smarty -> assign('user', $user);
$smarty -> assign('query', $query);

$album_results = array();
foreach ($albums as $id=>$album) {
    if (is_match($query, $album['title'])) {
        $album_results[] = $id;
    }
}

$artist_results = array();
foreach ($artists as $artist) {
    if (is_match($query, $artist)) {
        $artist_results[] = $artist;
    }
}

$song_results = array();
foreach ($albums as $id=>$album) {
    foreach ($album['songs'] as $song) {
        if (is_match($query, $song)) {
            $song_results[] = array($song, $id);
        }
    }
}

$smarty -> assign('album_results', $album_results);
$smarty -> assign('artist_results', $artist_results);
$smarty -> assign('song_results', $song_results);


$smarty -> display('results.tpl');