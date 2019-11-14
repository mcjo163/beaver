<?php
include "../../private_html/config.php";
// include PRIVATE_PATH . "db.inc.php";

if (empty($_POST)) {
    $smarty -> display('register.tpl');
} else {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $email = $_POST['email'];

    // check if all inputs are filled, respond accordingly
    $foundEmptyValues = false;
    if (!$username) {
        $smarty -> assign('emptyUsername', true);
        $foundEmptyValues = true;
    }
    if (!$password) {
        $smarty -> assign('emptyPassword', true);
        $foundEmptyValues = true;
    }
    if (!$confirm) {
        $smarty -> assign('emptyConfirm', true);
        $foundEmptyValues = true;
    }
    if($confirm != $password){
        $smarty -> assign('noMatch', true);
        $foundEmptyValues  = true;
    }
    if (!$email) {
        $smarty -> assign('emptyEmail', true);
        $foundEmptyValues = true;
    }
    if ($foundEmptyValues) {
        $smarty -> display('register.tpl');
        exit();
    }

}