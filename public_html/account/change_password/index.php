<?php
include "../../../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

if (empty($_POST)) {
    $smarty -> assign("id", $_GET['id']);
    $smarty -> display('password_reset.tpl');
    exit();
} else {

    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $user = $_GET['id'];


// check if all inputs are filled, respond accordingly
    $error = false;
    if (!$password) {
        $smarty->assign('emptyPassword', true);
        $error = true;
    }
    if (!$confirm) {
        $smarty->assign('emptyConfirm', true);
        $error = true;
    }
    if ($confirm != $password) {
        $smarty->assign('noMatch', true);
        $smarty->assign('password', $password);
        $error = true;
    }
    if ($error) {
        $smarty->display('password_reset.tpl');
        exit();
    }else{
        $hpw = hash("sha256", $password);

        $sql = "UPDATE user SET hashed_password = '$hpw' WHERE user_id = $user";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        ob_start();
        header("location: " . WEB_URL . "/album/");
        ob_end_flush();
        exit();
    }
}
