<?php
class category extends Db
{
    public function getALLCate()
    {
        $sql = self::$connection->prepare("SELECT * FROM categories");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getCateNameById($cate_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM categories");
        $sql->bind_param("i", $cate_id);
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
}
