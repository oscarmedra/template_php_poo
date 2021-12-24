<?php
    namespace App\Model;

    class User extends \App\Core\Model{
        public $id;
        public $name;
        public $email;
        public $password;

        

        public function get_id() : int{
            return $this->id;
        }

        public function get_firstname() : int{
            return $this->id;
        }

        public function get_password() : int{
            return $this->id;
        }

        public function get_role() : int{
            return $this->id;
        }



        // we can define here our setter and all method we want to define 
    }