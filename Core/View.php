<?php

namespace Core;

class View{

    public static function render($view, $args = [], $layout = null)
    {
        global $context;
        extract($args, EXTR_SKIP);
        $context = (object) array_merge( (array)$context, array( 'data' => $args ) );
        $file = "../App/Views/$view";  
        $layoutcontent = view::getLayout($layout);
        $view = view::getPageContent($file);
        if (is_readable($file)) 
        {       
            $page = str_replace("{{content}}", $view, $layoutcontent);
            echo $page;
        }
         else 
            throw new \Exception("$file not found");
    }

    public static function getLayout($layout)
    {  
        ob_start();
            include_once "../public/layout/$layout"."Layout.php"; 
        return ob_get_clean();
    }
  

     public static function getPageContent($file)
    {
        ob_start();
            include_once $file;
        return  ob_get_clean();
    }
  
}