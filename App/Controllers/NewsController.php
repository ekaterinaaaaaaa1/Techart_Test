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

        \App\Views\View::render('News/list', [
            'pageNewsCount' => $pageNewsCount,
            'pageSwitchButtonCount' => $pageSwitchButtonCount,
            'page' => $page,
            'newsModel' => $newsModel,
            'newsCount' => $newsCount,
            'pageCount' => $pageCount,
            'offset' => $offset,
            'banner' => $banner
        ]);
    }

    static function actionNews($id)
    {
        $newsModel = new \App\Models\NewsModel();
        $row = $newsModel->getItem($id);

        \App\Views\View::render('News/detail', [
            'newsModel' => $newsModel,
            'row' => $row
        ]);
    }
}