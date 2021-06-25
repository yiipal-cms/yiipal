<?php

/**
 * @file
 * Includes the autoloader created by Composer.
 */

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable([
  __DIR__ . '/../',
  __DIR__
]);

$dotenv->required('YII_DEBUG')->isBoolean();
$dotenv->required('YII_ENV')->allowedValues(['dev', 'test', 'prod']);

$dotenv->safeLoad();
