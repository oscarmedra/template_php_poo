<?php 
    namespace Core;
    use \PDO;

    class Database{
        /**
         * var \PDO
         */
        private $pdo;
        private $host;
        private $dbname;
        private $user;
        private $pass;
        private static $instance;

        public static function getInstance(): Database{
            if(self::$instance){
                return self::$instance;
            }

            return new Database();
        }

        public function __construct(){
            $this->host = Config::getInstance()->get('host');
            $this->dbname = Config::getInstance()->get('dbname');
            $this->user = Config::getInstance()->get('user');
            $this->pass = Config::getInstance()->get('pass');
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        }


        public function getPdo() : PDO{
            return $this->pdo;
        }

    }