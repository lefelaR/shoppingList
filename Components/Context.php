<?php

namespace Components;

class Context{


public $root =  '';
public $host =  '';
public $dir  =  '';    

    public function __construct()
    {
        $this->root =   $_SERVER['HTTP_HOST'];
        $this->host =   'http://'.$this->root;
        $this->dir  =   $this->host.'';
    }

}