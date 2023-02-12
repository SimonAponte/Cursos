<?php
    
   // Mapear la url ingresada al navegador
    
    class Core{

        protected $controladorActual = 'paginas';
        protected $metodoActual = 'index';
        protected $parametros = [];

        public function __construct(){

            $url = $this->getUrl();


        }

        public function getUrl(){

            echo $_GET['url'];

        }

    }