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

try {
  $dotenv->load();
  $dotenv->required('YII_DEBUG')->notEmpty()->isBoolean();
  $dotenv->required('YII_ENV')->notEmpty()->allowedValues(['dev', 'test', 'prod']);
}
catch (\Exception $e) {
  echo "<pre>";
  print_r($e->getMessage());
  echo "</pre>";
  exit();
}
