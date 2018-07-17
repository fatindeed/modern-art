<?php

// set_time_limit(0);
// error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
// ini_set('date.timezone', 'Asia/Shanghai');

define('APP_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR);

$app = new Yaf_Application(APP_PATH.'conf/application.ini');
$app->bootstrap() //call bootstrap methods defined in Bootstrap.php
	->run();

?>