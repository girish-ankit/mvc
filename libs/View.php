<?php

class View {
    public $msg;
            function __construct() {
    //   echo 'This is the view<br />'; 
    }
    public function render($name){
        require 'views/'.$name.'.php';
    }

}
?>
