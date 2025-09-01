<?php
namespace App\Controllers;

class MainController
{
    static function actionMain()
    {
        \App\Views\View::render('main', []);
    }
}