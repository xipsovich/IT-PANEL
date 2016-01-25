<?php
ob_start();
session_start();

define('ITPANEL', true);
define('ROOT', dirname(__FILE__) . '/');
define('TPL', ROOT . 'template/');

include_once(ROOT . 'system/config.php');
include_once(ROOT . 'system/classes/db.class.php');
include_once(ROOT . 'system/classes/system.class.php');
include_once(ROOT . 'system/classes/preg.class.php');
include_once(ROOT . 'system/classes/user.class.php');
include_once(ROOT . 'system/classes/logs.class.php');

if(DEBUG_MODE == 1){
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
}
if(!preg::ip($_SERVER['REMOTE_ADDR'])) die('Ошибка #3');

$db = new db(DBHOST, DBUSER, DBPASS, DBNAME);

if(@$_SESSION['user_id'] AND @$_SESSION['user_login'] AND @$_SESSION['user_password']){
	$user = new user($_SESSION['user_id']);
	if($_SESSION['user_ip'] != 0){
		if($_SESSION['user_ip'] != $_SERVER['REMOTE_ADDR'])
			$user->logout();
	}
	if($user->getBlock())
		$user->logout();
}

@$action = System::clear($_GET['action']);
@$action = preg_replace("/[^\w\d\s\/]/", '', $action);
@$part = explode('/', $action);
@$part = array_filter($part);

if(@$part[0] && is_numeric($part[0])){
	if(@!$user)
		$_SESSION['ref'] = (int)$part[0];
}

include_once(TPL . 'main.header.php');
include_once(ROOT . 'system/router.php');
include_once(TPL . 'main.footer.php');