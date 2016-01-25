<?php
if(!defined('ITPANEL')) die('ACCESS DENIED');

//Основные настройки
define('BASENAME', 'Панель управления игровыми серверами ITPANEL'); //Название сайта. отображается в титле
define('BASEURL', ''); //URL сайта
define('SALT', md5(base64_encode('12314323asjdowqieh4123uh4jbsdfmnz,djl1i23u0-1231""324jk32nj'))); //Соль для пароля
define('DEBUG_MODE', 1); //Дебаг мод: отображение ошибок

//Данные от DB
define('DBHOST', ''); //Хост базы данных
define('DBUSER', ''); //Пользователь базы данных
define('DBPASS', ''); //Пароль пользователя базы данных
define('DBNAME', ''); //Название базы данных

//Данные для PREG_MATCH
define('EMAIL', "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/");
define('LOGIN', "/^[a-z0-9]{1}[a-z0-9_.-]{1,15}$/");
define('PHONE', "#^\+[0-9]{1,2}\s?\([0-9]{3}\)\s?[0-9]+\-[0-9]+\-[0-9]+$#");
define('URL', "/^(http|https):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}((:[0-9]{1,5})?\/.*)?$/i");
define('STEAM', "/^STEAM_[0-9]:[0-9]:[0-9]+$/");
define('IP', '/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/');
define('PASSWORD_MIN', 6);
define('PASSWORD_MAX', 32);