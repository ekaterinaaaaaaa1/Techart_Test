<?php
namespace Config;

class DB
{
    private static $host = \Config\Config::DB_CONFIG['host'];
    private static $userName = \Config\Config::DB_CONFIG['user_name'];
    private static $password = \Config\Config::DB_CONFIG['password'];
    private static $dbName = \Config\Config::DB_CONFIG['db_name'];

    private static $connection;

    static function getConnection()
    {
        if (empty(self::$connection))
        {
            self::$connection = mysqli_connect(
                self::$host,
                self::$userName,
                self::$password,
                self::$dbName
            );

            if(!self::$connection)
            {
                echo 'Не удалось подключиться к базе данных!';
                echo mysqli_connect_error();
                die();
            }
        }
        
        return self::$connection;
    }

    static function getRows($str, $params = [], $types = "")
    {
        $query = self::prepare($str);
        
        if ($params != [])
        {
            $query->bind_param($types, ...$params);
        }

        $execution = $query->execute();
        $result = $query->get_result();
        
        $rows = [];
        while ($row = $result->fetch_assoc())
        {
            $rows[] = $row;
        }

        return $rows;
    }

    static function getRow($str, $params = [], $types = "")
    {
        $result = self::getRows($str, $params, $types);
        
        return !empty($result) ? $result[0] : null;
    }

    static function getScalar($str, $params = [], $types = "")
    {
        $result = self::getRow($str, $params, $types);
        
        return $result ? array_values($result)[0] : null;
    }

    static function query($str)
    {
        return self::getConnection()->query($str);
    }

    static function prepare($str)
    {
        return self::getConnection()->prepare($str);
    }
}