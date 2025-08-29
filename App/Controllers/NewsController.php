<?php
namespace App\Controllers;

class NewsController
{   
    static function actionPages($page=1)
    {
        $pageNewsCount = 4;
        $pageSwitchButtonCount = 3;

        $newsModel = new \App\Models\NewsModel();
        $newsCount = $newsModel->getCount();

        $pageCount = ceil($newsCount / $pageNewsCount);
        $offset = ($page - 1) * $pageNewsCount;

        $banner = $newsModel->getRows(0, 1)[0];

        $content = \App\Views\View::render(dirname(__DIR__, 2) . '/Views/News/list.php', [
            'pageNewsCount' => $pageNewsCount,
            'pageSwitchButtonCount' => $pageSwitchButtonCount,
            'page' => $page,
            'newsModel' => $newsModel,
            'newsCount' => $newsCount,
            'pageCount' => $pageCount,
            'offset' => $offset,
            'banner' => $banner
        ]);

        echo \App\Views\View::render(dirname(__DIR__, 2) . '/Views/Layouts/layout.php', [
            'content' => $content,
            'css' => 'Resources/css/index_style.css',
            'js' => 'Resources/js/index_main.js'
        ]);
    }

    static function actionNews($id)
    {
        $newsModel = new \App\Models\NewsModel();
        $row = $newsModel->getItem($id);

        $content = \App\Views\View::render(dirname(__DIR__, 2) . '/Views/News/details.php', [
            'newsModel' => $newsModel,
            'row' => $row
        ]);

        echo \App\Views\View::render(dirname(__DIR__, 2) . '/Views/Layouts/layout.php', [
            'content' => $content,
            'css' => 'Resources/css/news_style.css',
            'js' => 'Resources/js/news_main.js'
        ]);
    }
}