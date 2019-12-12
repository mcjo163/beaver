<?php
$login_page = true;
//session_start();

include "../../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

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

    // check if user is in the database
    $hpw = hash("sha256", $password);

    $sql = "SELECT *
            FROM `User`
            WHERE `email_address` = :email AND `hashed_password` = :hpw";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":hpw", $hpw);

    $stmt->execute();

    // if no user match found
    if (!$stmt->rowCount()) {
        $smarty -> assign('infoError', true);
        $smarty -> assign('email', $email);
        $smarty -> display('login.tpl');
        exit();
    }

    // user logged in
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['user'] = serialize($user);
    $_SESSION['id'] = $user['user_id'];

    ob_start();
    header("location: " . WEB_URL . "/album/");
    ob_end_flush();
    exit();
}