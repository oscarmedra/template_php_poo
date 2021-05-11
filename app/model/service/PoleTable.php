<?php
    namespace App\Model\Service;

    class PoleTable extends \Core\Model{
        protected int $id;
        protected $className = \App\Model\Entity\Pole::class;
        protected $table = "poles";
        public function __construct(){
            parent::__construct();
        }
    }