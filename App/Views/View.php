<?php
namespace App\Views;

class View
{
    static function render($view, $params)
    {
        // extract($params);
        // ob_start();
        // include $view['content'];

        // $content = ob_get_contents();
        // ob_get_clean();
        // include $view['layout'];

        // return $content;
        if (!empty($params))
        {
            extract($params);
        }
        
        ob_start();
        include $view;

     //   $content = ob_get_contents();
        $output = ob_get_clean();

        return $output;
    }
}