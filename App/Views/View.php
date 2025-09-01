<?php
namespace App\Views;

class View
{
    static $css = 'Resources/css';
    static $js = 'Resources/js';

    static function render($view, $params)
    {
        if (!empty($params)) {
            extract($params);
        }
        
        ob_start();
        include $_SERVER['DOCUMENT_ROOT'] . 'Views/' . $view .'.php';

        self::$css .= '/' . $view . '_style.css';
        self::$js .= '/' . $view . '_main.js';

        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . self::$css)) {
            self::$css = '';
        }
        
        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . self::$js)) {
            self::$js = '';
        }

        $content = ob_get_clean();
        include $_SERVER['DOCUMENT_ROOT'] . 'Views/Layouts/layout.php';

        return $content;
    }
}