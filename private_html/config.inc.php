<?php
$tmp = explode(DIRECTORY_SEPARATOR, __DIR__);
unset($tmp[count($tmp)-1]);
define('BASE_PATH', implode(DIRECTORY_SEPARATOR,$tmp) . DIRECTORY_SEPARATOR);
define('WEB_PATH', BASE_PATH . 'public_html/');
define('WEB_URL' , "http://localhost/beaver/public_html/");
define('SMARTY_ROOT', WEB_PATH .'smarty-3.1.33/');
define('SMARTY_TEMPLATES', WEB_PATH . 'templates/');
define('SMARTY', SMARTY_ROOT . 'libs/Smarty.class.php');

require_once SMARTY;
$smarty = new Smarty;
$smarty -> setTemplateDir(SMARTY_TEMPLATES);
$smarty -> setCompileDir(SMARTY_ROOT . 'templates_c/');
$smarty -> setCacheDir(SMARTY_ROOT . 'cache/');
$smarty -> setConfigDir(SMARTY_ROOT . 'configs/');
$smarty -> assign('WEB_URL', WEB_URL);




