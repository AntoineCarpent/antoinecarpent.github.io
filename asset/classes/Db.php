<?php
    class Db{

        protected $host;
        protected $dbname;
        protected $user;
        protected $password;
        public $pdo;
        
        function __construct(){
            $this->host = 'localhost';
            $this->dbname = 'projet_gmae';
            $this->user = 'root';
            $this->password = '';
        }

        public function connect(){

            try
            {
                $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->password);
            }
            catch (Exception $e){
                die('Erreur : ' . $e->getMessage());
            }

        }
        public function disconnect(){
            $this->pdo = null;
        }
    }
