<?php
require dirname(__DIR__, 1) . '/models/NewsModel.php';

$id = (int)$_GET['id'];

$newsModel = new NewsModel();
$row = $newsModel->getItem($id);

include dirname(__DIR__, 1) . '/views/pages/news.php';
?>