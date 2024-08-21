<?php

namespace app;

use app\Router;
use app\Session;

class App
{
    private static $instance;
    private static $vars = [];
    public static $session;

    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function init(array $config = [])
    {
        foreach ($config as $k => $v) {
            self::$vars[$k] = $v;
        }
    }

    public function run(array $config = []): Router
    {
        $this->init($config);
        $this->startSession();
        return new Router;
    }

    public function get(string $key): string | null
    {
        return array_key_exists($key, self::$vars) ? self::$vars[$key] : null;
    }

    private function startSession(): void
    {
        self::$session = new Session;
    }
}
