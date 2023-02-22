<?php //Ejemplo de modelo sencillo

    class Article{

        private $db;

        public function __construct(){

            $this->db = new Conectiondb;

        }

        public function getArticles(){

            $this->db->query("SELECT * FROM articles");
            return $this->db->records();

        }

    }