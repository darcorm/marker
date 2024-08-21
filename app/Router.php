<?php

namespace app;

use Exception;

class Router
{
    public function __construct()
    {
        if (!$this->validateUrl())
            throw new Exception('Invalid Url');

        $class = $this->getController();
        $method = $this->getMethod();
        $params = $this->getMethodParams();

        return new $class($method, $params);
    }

    private function validateUrl(): bool
    {
        $protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
        $url = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        return filter_var($url, FILTER_VALIDATE_URL);
    }

    private function getUrlParams(): array
    {
        return explode('/', $_SERVER['REQUEST_URI']);
    }

    private function getController(): string
    {
        $params = $this->getUrlParams();

        $ext = pathinfo(end($params), PATHINFO_EXTENSION);

        if ($ext ===  'css') exit();

        $nameSpace = 'controllers\\';
        $controllerName = !empty($params[1]) ? $params[1] : 'site';

        return $nameSpace . ucfirst($controllerName) . 'Controller';
    }

    private function getMethod(): string
    {
        $params = $this->getUrlParams();
        return !empty($params[2]) ? $params[2] : 'index';
    }

    private function getMethodParams(): array
    {
        $params = $this->getUrlParams();

        for ($i = 0; $i < 3; $i++) {
            unset($params[$i]);
        }

        return array_values($params);
    }
}
