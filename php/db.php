<?php
include 'config.php';

$connection = mysqli_connect(
    $db_config['host'],
    $db_config['user_name'],
    $db_config['password'],
    $db_config['db_name']
);

if(!$connection)
{
    echo 'Не удалось подключиться к базе данных!';
    echo mysqli_connect_error();
    die();
}
?>