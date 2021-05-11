<?php
    namespace App\Controller\UserController;
    use App\Model\User;
    use App\Model\Service\UserTable;
    use App\Factory;

    class UserController extends \core\Controller\AppController{
        protected $template = "mon template";
        public function __construct(){
            parent::__construct();
            $this->loadModel('user');
        }

        public function login($mail, $password) : User{
            
        }
    }