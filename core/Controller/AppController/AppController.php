<?php
    namespace Core\Controller;

    class AppController extends \Core\Controller{
        private $view_path;
        private $template;
        /**
         * @var \App\Factory
         */
        protected $app;
        public function __construct(){
            $this->app = \App\Factory::getInstance();
            $this->view_path = dirname(dirname(dirname(__DIR__))) ."\\view\\";
        }

        public function loadModel($model) {
            //le model a returner
        }

        /*
        private function render($pageName, $variable) : void{
            require_once str_replace('\\', '/', dirname(__DIR__))."/app/view/page/{$pageName}.php";
        }
        */
    }