<?php
defined('SITE_NAME') OR exit('access define');

class View
{
    public function render($viewPath, $layout = null)
    {
        if($layout === null){
            $this->view = $viewPath;
            require('views/layout.php');
        }
        else if($layout === false){
            require('views/'.$viewPath.'.php');
        }
        else{
            $this->view = $viewPath;
            require("views/$layout.php");
        }
    }
}