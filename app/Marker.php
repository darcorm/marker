<?php

namespace app;

use app\App;
use app\Session;

class Marker
{
    public static App $app;
    public static Session $session;

    public static function init()
    {
        self::$app = App::getInstance();
        self::$session = new Session;
    }
}
