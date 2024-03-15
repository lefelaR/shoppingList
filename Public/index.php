<?php

use Components\Context;


spl_autoload_register(function ($class) {
    $root = dirname(__DIR__);   
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }
});

$router = new Core\Router();

$router->add('', ['controller' => 'Index', 'action'=>'index']);
$router->add('{controller}/{action}');

$url = $_SERVER['QUERY_STRING'];

global $context;
if (!isset($context) && empty($context)) {    // call the class
    $context = new Context('', '', '', '');
}


$router->dispatch($url);