<?php

    class Pages extends Controller{
 
        public function __construct(){
            $this->articlemodel = $this->loadModel('article');
            //echo("Controlador pages iniciado");
            //$this->loadView('homepage');


        }
        public function index(){

            $articles = $this->articlemodel->getArticles();
            $data =[
                
                'title' => "Bienvenido a mi pagina MVC",
                'articles'=> $articles

            ];
            $this->loadView('homepage', $data);
            
        }

    }