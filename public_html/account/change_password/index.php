<?php
include "../../../private_html/config.php";

if (empty($_POST)) {
    $smarty -> display('password_reset.tpl');
    exit();
} else {

}
$password = $_POST['password'];
$confirm = $_POST['confirm'];


// check if all inputs are filled, respond accordingly
$error = false;
if (!$password) {
    $smarty -> assign('emptyPassword', true);
    $error = true;
}
if (!$confirm) {
    $smarty -> assign('emptyConfirm', true);
    $error = true;
}
if ($confirm != $password){
    $smarty -> assign('noMatch', true);
    $smarty -> assign('password', $password);
    $error = true;
}
if ($error) {
    $smarty -> display('password_reset.tpl');
    exit();
}
