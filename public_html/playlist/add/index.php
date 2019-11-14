<?php
include "../../private_html/config.php";

//if (empty($_POST)) {
//    $smarty -> display('new_playlist.tpl');
//    exit();
//} else {
//
//}
$playlist = $_POST['playlist'];

// check if all inputs are filled, respond accordingly
$error = false;
if (!$playlist) {
    $smarty -> assign('playlist', true);
    $error = true;
}
if ($error) {
    $smarty -> display('new_playlist.tpl');
    exit();
}