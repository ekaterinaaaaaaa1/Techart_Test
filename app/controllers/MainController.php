<?php

class MainController
{
    static function actionMain()
    {
        include dirname(__DIR__, 2) . '/views/pages/main.php';
    }
}