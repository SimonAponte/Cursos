<?php
    //CONFIGURACIÓN DE ACCESO A LA BASE DE DATOS

    DEFINE('DB_HOST', 'db'); //En caso de docker poner db, si no es docker colocar 127.0.0.1 o localhost
    DEFINE('DB_PORT', '3306');
    DEFINE('DB_USER', 'root');
    DEFINE('DB_PASSWORD', 'root');
    DEFINE('DB_NAME', 'MVCProject');
    DEFINE('DB_CHARSET', 'utf8');

    //RUTA DE LA APLICACIÓN
    define('RUTA_APP', dirname(dirname(__FILE__)));

    //RUTA URL EJEMPLO: http://localhost/MVC/mvcframework/
    define('RUTA_URL', 'http://localhost/MVC/mvcframework/'); //Esto remplazarlo por rutas relativas  a RUTA_APP

    //NOMBRE DEL SITIO
    define('WEBSITE_NAME', 'MVCTEST');
