<?php 
    namespace App\Core;
    class Controller{
        const path = "../src/view/pages/";
        const defaultPath = "../default/index.php";
        const adminDefaultt = "../default/admin/index.php";


        public function view($path) : string{
            ob_start();
            require_once($path);
            return ob_get_clean();
        }

    }