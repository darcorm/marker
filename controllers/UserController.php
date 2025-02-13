<?php

namespace controllers;

use models\User;
use app\Controller;

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
        if (isset($_POST['user-form'])) {
            $post  = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $model = new User;
            $model->setAttributes($post['user-form']);
            $model->save();
        }

        return $this->renderPartial('create');
    }
}
