<?php

use app\Marker;

ini_set('display_errors', 1);

require_once('autoload.php');
$config = require_once('config/config.php');

Marker::init();

$app = \app\Marker::$app;
$app->run($config);

var_dump($app->name);
die();
