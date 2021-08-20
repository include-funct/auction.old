<?php


namespace engine\Core;


class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route) {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
        //debug($this->path);
    }

    public function render($title, $vars = []){
        extract($vars);
        $path = 'engine/Views/' . $this->path . '.php';
        if(file_exists($path)){
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'engine/Views/layouts/' . $this->layout . '.php';
        }
    }

    public static function errorCode($code){
        http_response_code($code);
        $path = 'engine/Views/errors/' . $code . '.php';
        if (file_exists($path)){
            require $path;
        }
        exit;
    }

    public function message($status, $message){
        exit(json_encode(['status'=>$status,'message'=>$message]));
    }

    public function messageRedirect($url){
        exit(json_encode(['url'=>$url]));
    }

    public function redirect($url){
        header('location:' . $url);
        exit;
    }


}