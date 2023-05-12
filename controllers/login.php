<?php
    class Login extends Controller{

        function __construct()
        {
            parent::__construct();
            $this->view->mensaje2 = "Error al cargar el login";
        }

        function render()
        {
            $this->view->render('login');
    

            
        }
    }

?>