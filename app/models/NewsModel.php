<?php
require '../config/DB.php';

class NewsModel
{    
    function getCount()
    {
        $query = "SELECT COUNT(*) AS TOTAL FROM `news`";

        return DB::getScalar($query);
    }

    function getRows($offset, $limit)
    {
        $query = "SELECT * FROM news ORDER BY date DESC LIMIT ? OFFSET ?";
        $types = 'ii';
        $params = [$limit, $offset];

        return DB::getRows($query, $params, $types);
    }

    function getItem($id)
    {
        $query = "SELECT * FROM news WHERE id=?";
        $types = 'i';
        $params = [$id];

        $result = DB::getRow($query, $params, $types);

        if (empty($result))
        {
            echo 'Новость с id=' . $id . ' не найдена!';
            die();
        }

        return $result;
    }
}