<?php


namespace app\core;


class Controller
{
    public string $layout = 'main';

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render(string $view, array $params = []): array|bool|string
    {
        return Application::$app->router->renderView($view, $params);
    }
}