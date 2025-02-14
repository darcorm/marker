<?php

namespace app;

class Controller
{
    public function __construct(
        protected $class = 'site',
        protected $method = 'index',
        protected $params = []
    ) {}

    protected function render(string $view, array $params = [])
    {
        if (Marker::$app->request->getHeader('HX-Request')) {
            return $this->renderPartial($view, $params);
        }

        return $this->renderFull($view, $params);
    }

    protected function renderFull(string $view, array $params = []): void
    {
        extract($params);

        require("views/layouts/header.php");
        require("views/" . $this->class . "/{$view}.php");
        require("views/layouts/footer.php");
    }

    protected function renderPartial(string $view, array $params = []): void
    {
        extract($params);

        require("views/" . $this->class . "/{$view}.php");
    }
}
