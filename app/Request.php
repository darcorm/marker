<?php

namespace app;

class Request
{
    private array $headers;

    public function __construct()
    {
        $this->headers = getallheaders();
    }

    public function isGet(): bool
    {
        return htmlspecialchars($_SERVER['REQUEST_METHOD']) === 'GET' ? true : false;
    }

    public function isPost(): bool
    {
        return htmlspecialchars($_SERVER['REQUEST_METHOD']) === 'POST' ? true : false;
    }

    public function get(): array
    {
        return filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    public function post(): array
    {
        return filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    public function getHeader(String $header): String
    {
        return array_key_exists($header, $this->headers) ?? $this->headers[$header];
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }
}
