<?php 
    namespace App\Core;

    class Config{
        /**
         * @var $settings array
        */
        public $settings;
        /**
         * @var $conf Config
         */
        static  $conf;
        public function __construct(){
            $this->settings= [
                'db_host' => 'localhost',
                'db_user' => 'root',
                'db_pass' => 'passer',
                'db_name' => 'gmbase' // le nom de notre base de don├®e .

            ];
        }


        public function get1($key){
            return $this->settings[$key];
        }

        public static function __init__(){
            if(!self::$conf){
                self::$conf = new Config();
            }
        }

        public static function get($key){
            self::__init__();

            if(!in_array($key, array_keys(self::$conf->settings))){
                throw new \Exception("key not found");
            }

            return self::$conf->get1($key);
        }
    }

