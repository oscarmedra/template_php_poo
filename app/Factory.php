<?php
    namespace App;
    use App\Model\Entity\{
        User,
        Establishement
    };
    class Factory{
    
        /**
         * @var \Core\Database
         */
        private $database;
        private static $instance;

        public function __construct(){
            $this->database = \Core\Database::getInstance();
        }

        /**
        * @before
        */
        public static function getInstance() : Factory{

            if(self::$instance){
                self::$instance = new FActory();
                return self::$instance;
            }

            return new Factory();
        }

        public static function make(string $className){
            return new $className();
        }

    }