<?php

namespace Core;

abstract class Controller
{

    private $route_params = '';

    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }

    public function __call($name, $args)
    {
        $method = $name . 'Action';
        if (method_exists($this, $method)) 
        {
            call_user_func_array([$this, $method], $args);  
        } 
        else 
            throw new \Exception("Method $method not found in controller " . get_class($this));
        
    }
}