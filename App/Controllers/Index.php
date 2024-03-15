<?php

namespace App\Controllers;

use \Core\View;
use App\Models\ItemsModel;

class Index extends \Core\Controller
{

    public function indexAction()
    {
        $items = ItemsModel::Get();
        
        view::render('index/index.php', $items, 'main');
    }

    public function addAction()
    {
        view::render('index/add.php', array(), 'main');
    }


    public function save()
    {

    }


}