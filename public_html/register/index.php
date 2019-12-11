<?php
$login_page = true;
include "../../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

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
        $smarty -> assign('username', $username);
        $smarty -> assign('email', $email);
        $smarty -> display('register.tpl');
        exit();
    }

    // validated entries, now check if there is a user with conflicting data
    $sql = "SELECT *
            FROM `User`
            WHERE `username` = :username OR `email_address` = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount()) {
        $smarty->assign('infoConflict', true);
        $smarty -> assign('username', $username);
        $smarty -> assign('email', $email);
        $smarty -> display('register.tpl');
        exit();
    }

    // create new user
    $hpw = hash("sha256", $password);

    $sql = "INSERT INTO `User` (`username`, `email_address`, `hashed_password`)
            VALUES (:username, :email, :hpw)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':hpw', $hpw);
    $stmt->execute();

    // log user in and go to album page
    $sql = "SELECT *
            FROM `User`
            WHERE `email_address` = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $_SESSION['user'] = serialize($stmt->fetch(PDO::FETCH_ASSOC));

    ob_start();
    header("location: " . WEB_URL . "/album");
    ob_end_flush();
    exit();
}