<?php

namespace App\Models;

use PDO;
use PDOException;

class ItemsModel extends \Core\Model
{
    public static function Get()
    {
        try {
            $db = static::getDB();
            $stmt = $db->query('SELECT * FROM items ORDER BY createdAt');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    public static function GetById($id)
    {
        try {
            $db = static::getDB();
            $stmt = $db->query("SELECT * FROM items 
                                WHERE id = '$id' 
                                ORDER BY createdAt DESC");
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }


    public static function Save($data)
    {
        try {
            $db = static::getDB();
            $sql = "INSERT INTO items ( `name`,`quantity`,`createdAt`, `status`)
                    VALUES ('$data[name]','$data[quantity]','$data[createdAt]','$data[status]')";
            $result = $db->exec($sql);
            return $result;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    public static function Update($data)
    {
        try {
            $db = static::getDB();
            $sql = "UPDATE items SET `name` =  '$data[name]', `quantity` = '$data[quantity]', `updatedAt`= '$data[updatedAt]'
        WHERE `id`= $data[id]";
            $item_id = $db->exec($sql);
            return $item_id;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    public static function Delete($id)
    {
        try {
            $db = static::getDB();
            $sql = "DELETE FROM items WHERE id = $id";
            $result = $db->exec($sql);
            return $result;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
            
        }
       
    }
}
