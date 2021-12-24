<?php
    namespace App\Core;
    use App\Core\Config;
    use \PDO;

    class Database{
        /**
         * @pdo PDO
        */
        protected $pdo;
        static $database = null;

        /**
         * var $config Config
        */

        private $config;
        public function __construct(){
            $this->config = new Config();
            $this->pdo = $pdo = new PDO('mysql:dbname='.Config::get('db_name').';host='.Config::get('db_host'), Config::get('db_user'), Config::get('db_pass'));
            self::$database = $this;
        }

        public static function __init__(){
            if(!self::$database){
                self::$database = new Database();
            }
        }

        private function get_pdo() : PDO{
            return $this->pdo;
        }

        public static function pdo() : PDO{
            self::__init__();

            return self::$database->get_pdo();
        }
    }