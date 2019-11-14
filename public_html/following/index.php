<?php
include '../../private_html/config.php';

$smarty -> assign('user', $user);
$smarty -> assign('list_title', "Following");
$smarty -> assign('albums', $user['following']);
$smarty -> display('list_page.tpl');
