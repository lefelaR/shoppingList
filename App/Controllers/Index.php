<?php

namespace App\Controllers;

use \Core\View;
class Index extends \Core\Controller
{

    public function indexAction()
    {
        view::render('index/index.php', array(), 'main');
    }
}