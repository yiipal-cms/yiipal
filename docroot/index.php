<?php
/**
 * Yiipal bootstrap file.
 */

require __DIR__ . '/autoload.php';

defined('YII_DEBUG') or define('YII_DEBUG', filter_var($_ENV['YII_DEBUG'], FILTER_VALIDATE_BOOLEAN));
defined('YII_ENV') or define('YII_ENV', $_ENV['YII_ENV']);
// TODO: Determine console, frontend, backend.
defined('YII_RUNTIME') or define('YII_RUNTIME', 'frontend');

require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/common/config/bootstrap.php';
require __DIR__ . '/' . YII_RUNTIME . '/config/bootstrap.php';

$additionalConfigFiles = [
                 require __DIR__ . '/common/config/main.php',
                 require __DIR__ . '/common/config/main-local.php',
  YII_ENV_TEST ? require __DIR__ . '/common/config/test.php' : [],
  YII_ENV_TEST ? require __DIR__ . '/common/config/test-local.php' : [],
                 require __DIR__ . '/' . YII_RUNTIME . '/config/main.php',
                 require __DIR__ . '/' . YII_RUNTIME . '/config/main-local.php',
  YII_ENV_TEST ? require __DIR__ . '/' . YII_RUNTIME . '/config/test.php' : [],
  YII_ENV_TEST ? require __DIR__ . '/' . YII_RUNTIME . '/config/test-local.php' : [],
];

$config = yii\helpers\ArrayHelper::merge(...$additionalConfigFiles);

$application = new yii\console\Application($config);
$exitCode = $application->run();
