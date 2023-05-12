<?php
    //Carga las configuraciones principales
    require_once 'config.php';

    //Establecemos librerias para cargar los controllers, las vistas y app
    //hasta este momento no tenemos ningun modelo
    require_once("libs/controller.php");
    require_once("libs/view.php");
    require_once("libs/app.php");


    //creamos el objeto con el nombre de la url..
    $app = new App();

?>