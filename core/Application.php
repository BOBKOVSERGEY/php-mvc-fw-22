<?php

namespace app\core;

class Application
{
    public static string $ROOT_DIR;
    public Request $request;
    public Router $router;
    public Database $db;
    public Response $response;
    public Session $session;
    public static Application $app;
    public Controller $controller;

    public function __construct(
        $routePath,
        array $config
    )
    {
        self::$ROOT_DIR = $routePath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);

        $this->db = new Database($config['db']);
    }

    public function run(): void
    {
       echo $this->router->resolve();
    }

    /**
     * @return Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }

    /**
     * @param Controller $controller
     */
    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }
}