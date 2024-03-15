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
        $data = $_GET;
        if (isset($data['id'])) {
            $id = $data['id'];
            $item = ItemsModel::GetById($id);
        } else
            $item = array();
        view::render('index/add.php', $item, 'main');
    }


    public function save()
    {

    }


}