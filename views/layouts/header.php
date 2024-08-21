<?php

use app\App;

$appName = App::getInstance()->get('name');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="public/js/htmx.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/main.css">

    <title><?= $appName ?></title>
</head>

<body>
    <header class="site-header">
        <h1 hx-trigger="click" hx-get="site/home" hx-target="#content"><?= $appName ?></h1>
        <?php require_once('topnav.php') ?>
    </header>

    <main id="content" class="main-content">