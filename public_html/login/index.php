<?php
include "../../private_html/config.inc.php";
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

    // all inputs filled, so check database for email/hashed password combo
    $pwHash = hash("sha256", $password);

    $sql = "SELECT User_OID AS ID, Email, First_Name, Last_Name, Gender, `Password`
                FROM User
                WHERE Email = '$email'
                AND `Password` = '$pwHash'";

    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();

    if (!$stmt->rowCount()) {
        $smarty -> assign('email', $email);
        $smarty -> assign("infoMismatch", true);
        $smarty -> display('login.tpl');
        exit();
    }

    // user found!
    session_start();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['user'] = serialize($user);

    ob_start();
    header("location: " . WEB_URL);
    ob_end_flush();
    exit();
}