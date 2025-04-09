<?php

namespace App\router;
class Router
{

    private $routes = [
        '/' => "MusiqueController@index",
        '/songlist' => "MusiqueController@displaySong",
        '/result' => "MusiqueController@findSong",
        '/results' => "MusiqueController@findByArtist",
        "/delete" => "MusiqueController@delete",
    ];


    public function dispatch($request_uri)
    {
            if (!array_key_exists($request_uri, $this->routes)) {
                http_response_code(404);
                include './src/views/errors/page404.php';
                exit;
            }
            $valueRoutes = explode('@', $this->routes[$request_uri]);
            $controller = $valueRoutes[0];
            $action = $valueRoutes[1];




        $directory = '/controllers/' . $controller . '.php';
        if (!file_exists(__DIR__ . "../../$directory")) {
            http_response_code(500);
            include './src/views/errors/page500.php';
            exit;
        }
        $controllerPass = "App\\controllers\\$controller";
        $controlerInstance = new $controllerPass();
        if (!class_exists($controllerPass)) {
            http_response_code(500);
            include './src/views/errors/page500.php';
            exit;
        }


        echo $controlerInstance->$action();
    }


}