<?php
    class Errores extends Controller{

        function __construct()
        {
            parent::__construct();
            $this->view->mensaje = "Error al cargar el recurso de la vista principal del main";
            $this->view->render('error');
        
        }
    }

?>