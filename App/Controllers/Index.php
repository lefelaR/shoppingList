<?php

namespace App\Controllers;

use \Core\View;
class Index extends \Core\Controller
{

    public function indexAction()
    {
        view::render('index/index.php', array(), 'main');
    }

    public function addAction()
    {
        view::render('index/add.php', array(), 'main');
    }


    public function save()
    {

    }


}