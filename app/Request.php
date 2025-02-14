<?php

namespace app;

class Request
{
    public array $headers;

    public function __construct()
    {
        $this->headers = getallheaders();
    }

    public function isGet()
    {
        return htmlspecialchars($_SERVER['REQUEST_METHOD']) === 'GET' ? true : false;
    }

    public function isPost()
    {
        return htmlspecialchars($_SERVER['REQUEST_METHOD']) === 'POST' ? true : false;
    }

    public function get()
    {
        return filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    public function post()
    {
        return filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    public function getHeader(String $header)
    {
        return array_key_exists($header, $this->headers) ?? $this->headers[$header];
    }
}
