<?php
require dirname(__DIR__, 1) . '/models/NewsModel.php';

class NewsController
{   
    static function actionPages($page=1)
    {
        $pageNewsCount = 4;
        $pageSwitchButtonCount = 3;

        $newsModel = new NewsModel();
        $newsCount = $newsModel->getCount();

        $pageCount = ceil($newsCount / $pageNewsCount);

        $offset = ($page - 1) * $pageNewsCount;

        $banner = $newsModel->getRows(0, 1)[0];

        include dirname(__DIR__, 2) . '/views/pages/pages.php';
    }

    static function actionNews($id)
    {
        $newsModel = new NewsModel();
        $row = $newsModel->getItem($id);

        include dirname(__DIR__, 2) . '/views/pages/news.php';
    }
}