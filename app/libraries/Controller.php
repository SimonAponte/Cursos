<?php

    //Carga los modelos y vistas

    class Controller{

        public function loadModel($model){

            require_once '../app/models/' . $model . '.php';
            return new $model();
        }

        public function loadView($view, $data = []){

            if(file_exists('../app/views/pages/'. $view. '.php')){

                require_once '../app/views/pages/' . $view . '.php';
                
            }else{

                die('la vista no existe');

            }
            
        }

    }