<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-1.1.14/framework/yii.php';
//$config=dirname(__FILE__).'/protected/config/main.php';
$config=dirname(__FILE__).'/protected/config/';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', false);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

if( YII_DEBUG === true ) {
  ini_set('display_errors', true);
  error_reporting(E_ALL);

  define('CURRENT_ACTIVE_DOMAIN', 'alsadaqat.local');

} else {
  ini_set('display_errors', false);
  error_reporting(0);

  define('CURRENT_ACTIVE_DOMAIN', 'alsadaqat.com');
}

$configFile = YII_DEBUG ? 'development.php' : 'production.php';

require_once($yii);
//Yii::createWebApplication($config)->run();
Yii::createWebApplication($config . $configFile)->run();