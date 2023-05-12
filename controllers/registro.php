<?php
    class Registro extends Controller{

        function __construct()
        {
            parent::__construct();
            $this->view->mensaje3 = "Error al cargar el registro";
        }

        function render()
        {
            $this->view->render('registro');
        }
    }

?>