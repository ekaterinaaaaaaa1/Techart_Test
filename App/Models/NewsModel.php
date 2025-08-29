<?php
namespace App\Models;

class NewsModel
{    
    function getCount()
    {
        $query = "SELECT COUNT(*) AS TOTAL FROM `news`";

        return \Config\DB::getScalar($query);
    }

    function getRows($offset, $limit)
    {
        $query = "SELECT * FROM news ORDER BY date DESC LIMIT ? OFFSET ?";
        $types = 'ii';
        $params = [$limit, $offset];

        return \Config\DB::getRows($query, $params, $types);
    }

    function getItem($id)
    {
        $query = "SELECT * FROM news WHERE id=?";
        $types = 'i';
        $params = [$id];

        $result = \Config\DB::getRow($query, $params, $types);

        if (empty($result))
        {
            echo 'Новость с id=' . $id . ' не найдена!';
            die();
        }

        return $result;
    }
}