<?php
    //Definimos la ruta principal de nuestro Sitio Web
    define("urlsite", "http://localhost:8888/ProyectoMVC/");
    
    //Definimos la constante para el nombre de la compañia (Nuestro Sitio)
    const company = "CETI";
    
    //Establecemos la Zona Horario para el Pais y Ciudad donde se manejara el sitio
    date_default_timezone_set("America/Mexico_City");
    
    define('HOST', 'localhost');
    define('DB', 'crudphp');//camnbiar nombre de base de datos
    define('USER', 'root');//quitar root
    define('PASSWORD', "");//quitar root
    define('CHARSET', 'utf8mb4');
