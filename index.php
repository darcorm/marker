<?php

ini_set('display_errors', 1);

require_once('autoload.php');
$config = require_once('config/config.php');

$app = app\App::getInstance();
$app->run($config);
