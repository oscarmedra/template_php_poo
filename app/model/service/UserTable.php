<?php
    namespace App\Model\Service;
    use App\Model\Entity\User;

    class UserTable extends \Core\Model{
        protected int $id;
        protected $className = \App\Model\Entity\User::class;
        protected $table = "user";
        public function __construct(){
            parent::__construct();
        }
    }