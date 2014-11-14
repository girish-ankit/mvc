<?php

class Help extends Controller{

    function __construct() {
        parent::__construct();
        echo 'We are inside help <br />';
    }
    
    public function other($arg = FALSE){
        echo 'We are inside other <br />';
        if($arg){
           echo 'argument supplied by you <b>'.$arg.'<b> <br />'; 
        }
       
        require 'models/help_model.php';
        $model = new Help_Model();
    }

}
?>
