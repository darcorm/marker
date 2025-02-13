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
}
