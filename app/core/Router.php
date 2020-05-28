<?php

class Router {

    protected $routes = [];
    protected $params = [];

    public function run(){
        // контроллер и действие по умолчанию
        $controller_name = 'Main';
        $action_name = 'Index';
        
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        // получаем имя контроллера
        if ( !empty($routes[1]) )
        {   
            $controller_name = $routes[1];
        }
        
        // получаем имя экшена
        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
        }

        // получаем параметр
        if ( !empty($routes[3]) )
        {
            $this->params = array("controller" => $controller_name, "action" => $action_name, "data" => $routes[3]);
        }else{
             $this->params = array("controller" => $controller_name, "action" => $action_name);
        }

            $path = ucfirst($controller_name).'Controller';

           if (class_exists($path)) {
                $action = 'action' . $action_name;
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
    }

}