<?php

namespace app;

class Request
{
    public $test;

    public function __construct()
    {
        $this->test = "hello from request";
    }
}
