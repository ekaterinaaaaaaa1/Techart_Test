<?php
namespace App\Controllers;

class MainController
{
    static function actionMain()
    {
        $content = \App\Views\View::render(dirname(__DIR__, 2) . '/Views/main.php', []);

        echo \App\Views\View::render(dirname(__DIR__, 2) . '/Views/Layouts/layout.php', [
            'content' => $content,
            'css' => 'Resources/css/main_style.css'
        ]);
    }
}