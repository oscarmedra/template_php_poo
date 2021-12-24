<?php
namespace App\Controller;


use App\Core\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller{
    
    public function login(){
        $page_content = $this->view(self::path . 'login.php');

        require_once(self::defaultPath);
    }

    public function register(){
        $page_content = $this->view(self::path . 'register.php');

        require_once(self::defaultPath);
    }
}