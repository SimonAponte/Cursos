<?php
    
   // Mapear la url ingresada al navegador
    
    class Core{

        protected $controladorActual = 'pages';
        protected $metodoActual = 'index';
        protected $parametros = [];

        public function __construct(){
            //print_r($this->getUrl());
            $url = $this->getUrl();
            
            //Busca el controlador por su nombre, lo pasa a minúsculas y  le coloca mayúscula inicial.
            if(isset($url) && file_exists('../app/controllers/' . ucwords(strtolower($url[0])) . '.php')){
                
                //Lo guarda como controlador actual.
                $this->controladorActual = ucwords(strtolower($url[0]));

                //unset indice
                unset($url[0]);

            }
            require_once '../app/controllers/' . $this->controladorActual . '.php';
            $this->controladorActual = new $this->controladorActual;

        }

        public function getUrl(){

            //echo $_GET['url'];
            if(isset($_GET['url'])){
            
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;

            }

        }

    }