<?php

    class Pages extends Controller{
 
        public function __construct(){

            //echo("Controlador pages iniciado");
            //$this->loadView('homepage');


        }
        public function index(){

            $this->loadView('homepage');
            
        }

    }