<?php
require 'engine/inc/dev.php';
use engine\Core\Router;
//use engine\inc\DB;

spl_autoload_register(function ($class) {
    $path = str_replace('\\','/', $class . '.php');
    if(file_exists($path)){
        require $path;
    }
});

session_start();

$router = new Router;
$router->run();
