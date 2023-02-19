<?php

    class Pages extends Controller{
 
        public function __construct(){

            //echo("Controlador pages iniciado");
            //$this->loadView('homepage');


        }
        public function index(){
            $data =[

                'title' => "Bienvenido a mi pagina MVC"

            ];
            $this->loadView('homepage', $data);
            
        }

    }