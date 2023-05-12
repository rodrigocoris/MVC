<?php
include ('views/db.php');
    class Log extends Controller{

        function __construct()
        {
            parent::__construct();
            $this->view->mensaje2 = "Error 2 en el main principal";
        }

        function render()
        {
            $this->view->render('log');
    

            
        }
        
    }




?>