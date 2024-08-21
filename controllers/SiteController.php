<?php

namespace controllers;

use app\Controller;

class SiteController extends Controller
{
    private $className = 'site';

    public function __construct(string $method, array $params)
    {
        parent::__construct($this->className, $method, $params);

        return $this->$method($params);
    }

    public function index()
    {
        return $this->render('index', [
            'model' => 'Site index render test',
        ]);
    }

    public function home()
    {
        return $this->renderPartial('index', [
            'model' => 'Site index render test'
        ]);
    }

    public function login(array $params = [])
    {
        return $this->renderPartial('login', [
            'params' => $params
        ]);
    }
}
