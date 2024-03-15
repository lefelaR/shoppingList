<?php

namespace Components;

class Context{


public $root =  '';
public $host =  '';
public $dir  =  '';    
public $siteroot = '';

    public function __construct()
    {
        $this->root =   $_SERVER['HTTP_HOST'];
        $this->host =   'http://'.$this->root;
        $this->siteroot = $this->host.'/shoppingList/';
        $this->dir  =   $this->host.'/shoppingList/';
    }

}