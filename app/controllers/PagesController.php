<?php
require '../models/NewsModel.php';

$pageNewsCount = 4;
$pageSwitchButtonCount = 3;

$newsModel = new NewsModel();
$newsCount = $newsModel->getCount();

$pageCount = ceil($newsCount / $pageNewsCount);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $pageNewsCount;

$banner = $newsModel->getRows(0, 1)[0];

include '../views/pages/pages.php';
?>