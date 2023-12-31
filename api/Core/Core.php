<?php
    class Core {
        public function __construct() {
            $this->run();
        }
        private function run() {
            $uri = trim($_SERVER['REQUEST_URI'], '/');

            if ($uri === 'index.php') $uri = '';
            else if (strpos($uri, "index.php/") === 0) $uri = substr($uri, strlen("index.php/"));

            $uri = explode('/', $uri);

            if (!empty($uri[0])) {
                $controller = ucfirst(strtolower($uri[0])).'Controller';
                array_shift($uri);
                if (!empty($uri[0])) {
                    $method = strtolower($uri[0]);
                    array_shift($uri);
                    if (count($uri) > 0) $paramethers = $uri;
                    else $paramethers = [];
                } else {
                    $method = 'index';
                    $paramethers = [];
                }
            } else {
                $controller = 'HomeController';
                $method = 'index';
                $paramethers = [];
            }

            $controllerPath = $_SERVER['DOCUMENT_ROOT']."/api/Controllers/$controller.php";
            if (!file_exists($controllerPath) || !method_exists($controller, $method) || method_exists('Controller', $method)) {
                $controller = 'ErrorController';
                $method = 'index';
                $paramethers = [];
            }

            try {
                $callController = new $controller;
                call_user_func_array(array($callController, $method), $paramethers);
            } catch (\Throwable $e) {
                call_user_func_array(array(new ErrorController, 'index'), []);
            }
        }
    }
?>