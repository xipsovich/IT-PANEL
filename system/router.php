<?php
if(!defined('ITPANEL')) die('ACCESS DENIED');

switch(@$part[0]){
	default:
		include_once(ROOT . 'system/modules/index.router.php');
		break;
	
	case 'admin':
		include_once(ROOT . 'system/modules/admin.router.php');
		break;
	
	case 'users':
		include_once(ROOT . 'system/modules/users.router.php');
		break;
	
	case 'servers':
		include_once(ROOT . 'system/modules/servers.router.php');
		break;
	
	case 'support':
		include_once(ROOT . 'system/modules/support.router.php');
		break;
}