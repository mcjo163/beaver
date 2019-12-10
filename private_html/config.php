<?php
// set base, web, and private paths
$tmp = explode(DIRECTORY_SEPARATOR, __DIR__);
unset($tmp[count($tmp) - 1]);
define('BASE_PATH', implode(DIRECTORY_SEPARATOR, $tmp) . DIRECTORY_SEPARATOR);
define('WEB_PATH', BASE_PATH . 'public_html/');
define('PRIVATE_PATH', BASE_PATH . 'private_html/');

// set url
define('WEB_URL', 'http://localhost/beaver/public_html');

// set class root
define('CLASS_ROOT', WEB_PATH . 'class/');

// set Smarty constants
define('SMARTY_ROOT', WEB_PATH . 'smarty-3.1.33/');
define('SMARTY_TEMPLATES', WEB_PATH . 'templates/');
define('SMARTY', SMARTY_ROOT . 'libs/Smarty.class.php');

// initialize Smarty
require_once SMARTY;
$smarty =  new Smarty;
$smarty -> setTemplateDir(SMARTY_TEMPLATES);
$smarty -> setCompileDir(SMARTY_ROOT . 'templates_c');
$smarty -> setCacheDir(SMARTY_ROOT . 'cache');
$smarty -> setConfigDir(SMARTY_ROOT . 'configs');
$smarty -> assign('WEB_URL', WEB_URL);

// for development
include PRIVATE_PATH . 'dummy.php';

// redirect to login if not logged in and not on login page
session_start();
if (!isset($login_page) && !isset($_SESSION['user'])) {
    ob_start();
    header("location: " . WEB_URL . "/login");
    ob_end_flush();
    exit();
}