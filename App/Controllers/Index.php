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
        if (isset($_POST)) $data = $_POST;

        $data['createdAt'] = date("Y-m-d H:i:s");
        $data['status'] = 1;
        try {
            $id =  ItemsModel::Save($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        redirect('/');
    }

    public function update()
    {
        $data = $_POST;
        $data['updatedAt'] = date("Y-m-d H:i:s");
        try {
            $id =  ItemsModel::Update($data);
        } catch (\Throwable $th) {
        }
        redirect('/');
    }

    public function delete()
    {
        $id = $_GET['id'];
        try {
            ItemsModel::Delete($id);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        redirect('/');
    }
}
