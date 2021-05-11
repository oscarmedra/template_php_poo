<?php 
    namespace Core;
    
    class Config{
        private $settings;
        private static $instance;

        public static function getInstance() : Config{
            if(self::$instance){
                return self::$instance;
            }

            return  new Config();
        }

        public function __construct(){
            $this->settings =  [
                "host"=>"localhost",
                "user"=>"root",
                "pass"=>"",
                "dbname"=>"gmbase",
            ];
        }

        public function get($key) : ?string{
            if(!in_array($key, array_keys($this->settings))){
                throw new \Exception("key not found");
            }

            return $this->settings[$key];
        }

    }

