<?php
    
   // Mapear la url ingresada al navegador
    
    class Core{

        protected $controladorActual = 'pages';
        protected $metodoActual = 'index';
        protected $parametros = [];

        public function __construct(){
            //print_r($this->getUrl());
            $url = $this->getUrl();
            
            if(isset($url)){

                //Busca el controlador por su nombre, lo pasa a minúsculas y  le coloca mayúscula inicial.
                if(file_exists('../app/controllers/' . ucwords(strtolower($url[0])) . '.php')){
                    
                    //Lo guarda como controlador actual.
                    $this->controladorActual = ucwords(strtolower($url[0]));

                    //unset indice
                    unset($url[0]);

                }

                require_once '../app/controllers/' . $this->controladorActual . '.php';
                $this->controladorActual = new $this->controladorActual;

                //Validar existencia del metodo en el controlador
                if(isset($url[1])){

                    if(method_exists($this->controladorActual, $url[1])){

                        $this->metodoActual = $url[1];

                    }

                }
                //echo $this->metodoActual;
                unset($url[1]);

                //recibir parametros
                $this->parametros = ($url) ? array_values($url) : []; 

                //llamar función con los parametros del array
                call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

            }
            
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