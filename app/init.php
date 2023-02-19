<?php
    //Carga de librerias
    require_once 'config/config.php';




    //require_once 'libraries/Conectiondb.php';
    //require_once 'libraries/Controller.php';
    //require_once 'libraries/Core.php';

    //Autoload php

    spl_autoload_register(function($className){

        require_once 'libraries/' . $className . '.php'; 

    });