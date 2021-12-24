<?php
namespace App\Controller;


use App\Core\Controller;
use App\Model\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class Usercontroller extends Controller{


    public function index() {
        $page_content = $this->view(self::path . 'user/index.php');

        // the entrie file .
        require_once(self::defaultPath);
    }


    public static function all() : array {
        return User::find();
    }


    public function create(){

        /*
            html
        */
    }

    public function edit($obj){
        /*
            html
        */
    }

    public function delete(int $id){
        User::delete($id);
    }
}