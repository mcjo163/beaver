<?php
include "../../private_html/config.php";
// include PRIVATE_PATH . "db.inc.php";

if (empty($_POST)) {
    $smarty -> display('login.tpl');
} else {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // check if all inputs are filled, respond accordingly
    $foundEmptyValues = false;
    if (!$email) {
        $smarty -> assign('emptyEmail', true);
        $foundEmptyValues = true;
    }
    if (!$password) {
        $smarty -> assign('emptyPassword', true);
        $foundEmptyValues = true;
    }
    if ($foundEmptyValues) {
        $smarty -> assign('email', $email);
        $smarty -> display('login.tpl');
        exit();
    }

    ob_start();
    header("location: " . WEB_URL . "/album");
    ob_end_flush();
    exit();
}