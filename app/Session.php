<?php

namespace app;

class Session
{
    private static $instance;

    public static function getInstance(): Session
    {
        if (empty(self::$instance)) {
            self::$instance = new Session;
        }

        return self::$instance;
    }

    public function set(string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function get(string $key): mixed
    {
        return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : null;
    }
}
