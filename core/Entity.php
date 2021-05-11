<?php
    namespace Core;

    abstract class Entity{
        public function __construct(){

        }
         /*
        public function all(): array | null{
            $className = "\\App\Model\Service\\". explode('\\', $this::class)[count(explode('\\', $this::class)) - 1] . "Table";
            return (new $className())->all();
        }
       
        public  function find(string ...$cconditions): array | null{
            $className = explode('\\', $this::class)[count(explode('\\', $this::class)) - 1] . "Table";
            return (new $className())->find());
        }

        public  function edit($obj){
            $className = "\\App\Model\Service\\". explode('\\', $this::class)[count(explode('\\', $this::class)) - 1] . "Table";
            return (new $className())->edit($obj);
        }

        public function delete($id){
            $className = "\\App\Model\Service\\". explode('\\', $this::class)[count(explode('\\', $this::class)) - 1] . "Table";
            return (new $className())->delete($id);
        }
        */
        

        
    }