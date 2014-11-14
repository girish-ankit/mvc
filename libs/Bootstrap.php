<?php

class Bootstrap {

    function __construct() {

        $url = isset($_GET['url'])?$_GET['url']:null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //print_r($url) . '<br />';
        if(empty($url[0])){
            require 'controllers/index.php';
            $controller = new Index();
            return FALSE;
        }

        $file = 'controllers/' . $url[0] . '.php';

        if (file_exists($file)) {
            require 'controllers/' . $url[0] . '.php';
        } else {
            require 'controllers/error.php';
            $err = new Error();
            return FALSE;
        }

        $controller = new $url[0]();


        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {

            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }

}

?>
