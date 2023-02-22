<?php

    //PDO

    class Conectiondb{

        private $host = DB_HOST;
        private $port = DB_PORT;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $name = DB_NAME;
        private $charset = DB_CHARSET;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){

            //Configurar conexión
            $dsn = 'mysql:host=' . $this->host . ';port='.  $this->port .';dbname=' . $this->name .';charset='. $this->charset;

            $options = array(

                PDO::ATTR_PERSISTENT => true, //mejor rendimiento
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 

            );

            //Creación de instancia PDO
            try {
         
                $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
                //$this->dbh->exec('SET CHARACTER SET utf8');
                

            } catch (PDOException $e) {

                $this->error = $e->getMessage();
                echo $this->error;

            }


        }
        //Preparación de consulta
        public function query($sql){

            $this->stmt = $this->dbh->prepare($sql);

        }

        //Vinculamos a parametrizamos la consulta
        public function bind($param, $value, $type = null){
           
            if(is_null($type)){

                switch (true) {

                    case is_int($value):  $type = PDO::PARAM_INT; break;

                    case is_boll($value):  $type = PDO::PARAM_BOOL; break;
                    
                    case is_null($value):  $type = PDO::PARAM_NULL; break;

                    default: $type = PDO::PARAM_STR; break;
                        
                }
            
            }
            $this->stmt->binValues($param, $value, $type);

        }

        //Ejecución de la consulta
        public function execute(){

                return $this->stmt->execute();

        }

        //Obtener los registros
        public function records(){

            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);

        }

        //Obtener un sólo registro
        public function record(){

            $this->execute();
            return $this->stmt->fetch(PDO::FECTH_OBJ);

        }

        //Cantidad de registros
        public function rowCount(){

            return $this->stmt->rowCount(PDO::FETH_OBJ);

        }

    }