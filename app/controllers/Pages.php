<?php

    class Pages extends Controller{
 
        public function __construct(){
            //Example for call to models 
            $this->articlemodel = $this->loadModel('article');

        }
        public function index(){

            $articles = $this->articlemodel->getArticles(); //Call to data of model
            $data =[
                
                'title' => "Bienvenido a mi pagina MVC",
                'articles'=> $articles   //data of model in variable

            ];
            $this->loadView('homepage', $data);
            
        }

    }