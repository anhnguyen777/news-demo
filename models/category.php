<?php
class Category extends db
{
    public function getAllCate()
    {
        $sql = self::$connection->prepare("SELECT * FROM `categories`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getCateNameById($Cate_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `categories` WHERE `id`=?");
        $sql->bind_param('i', $Cate_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
