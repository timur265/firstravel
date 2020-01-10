<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/itravel/core');
define("LIBS", ROOT . '/vendor/itravel/core/libs');
define("CACHE", ROOT . '/temp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'watches');

$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://ishop2.loc/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://ishop2.loc
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');
require_once (ROOT . '/vendor/autoload.php'); //загружаем автозагрузчик композер
