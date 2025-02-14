<?php

namespace controllers;

use models\User;
use app\Controller;
use app\Marker;

class UserController extends Controller
{
    private $className = 'user';

    public function __construct($method, $params)
    {
        parent::__construct($this->className, $method, $params);

        return $this->$method($this->params);
    }

    public function index(): void
    {
        $this->render('index');
    }

    public function create()
    {
        if (Marker::$app->request->isPost()) {
            $post = Marker::$app->request->post();

            $model = new User;
            $model->setAttributes($post);
            $model->save();
        }

        return $this->render('create');
    }
}
