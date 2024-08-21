<?php

namespace controllers;

use app\Controller;

class BookmarkController extends Controller
{
    private $className = 'bookmark';

    public function __construct($method, $params)
    {
        parent::__construct($this->className, $method, $params);

        return $this->$method($params);
    }

    public function index(): void
    {
        $this->render('index', [
            'model' => 'Bookmark file test'
        ]);
    }
}
