<?php
include '../../private_html/config.php';
session_start();
session_destroy();

ob_start();
header("location: "  . WEB_URL . "/login/");
ob_end_flush();

exit();



