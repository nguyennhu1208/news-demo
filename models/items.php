<?php
class Item extends Db
{
    public function getAllItems()
    {
        $sql = self::$connection->prepare("SELECT * FROM items");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getNewItem($start, $count)
    {
        $sql = self::$connection->prepare("SELECT * FROM items ORDER BY 'created_at' DESC LIMIT ?,?");
        $sql->bind_param("ii", $start, $count);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
}
