<?php

class Route {
    private static $routes = array(
        '~^/$~' => 'actionMain',
        '~^/news/page-(\d+)/$~' => 'actionPages',
        '~^/news/(\d+)/$~' => 'actionNews',
        '~^/news/$~' => 'actionPages'
    );

    static function start()
    {
        $request_uri = $_SERVER['REQUEST_URI'];

        if (preg_match(array_key_first(self::$routes), $request_uri, $matches))
        {
            require dirname(__DIR__, 1) . '/app/controllers/MainController.php';
            MainController::actionMain();
        }
        array_shift(self::$routes);

        foreach (self::$routes as $key => $value)
        {
            if (preg_match($key, $request_uri, $matches))
            {
                require dirname(__DIR__, 1) . '/app/controllers/NewsController.php';
                count($matches) > 1 ? NewsController::$value($matches[1]) : NewsController::$value();
                break;
            }
        }
    }
}