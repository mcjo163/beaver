<?php
include '../../../private_html/config.php';

$smarty -> assign('user', $user);
$smarty -> display('edit_album_page.tpl');
