<?php

namespace app;

class Request
{
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
}
