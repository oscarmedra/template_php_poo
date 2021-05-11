<?php
    namespace App\Model\Entity;
    use App\Model\Service\PoleTable;
    use Core\Entity;
    class Pole extends Entity{
        protected int $id;
        protected $name;
        protected $slug;

        public function __construct(){
            
        }

        public function property() : array{
            return [
                ':id' => $this->id,
                ':name' => $this->name,
                ':slug'=> $this->slug,
            ];
        }

        public static function all() : array | null {
            $className = "\\App\Model\Service\\PoleTable";
            return (new $className())->all();
        }

        public static function find() : array | null{
            return null;
        }
        
        public  function edit(?Pole $obj): bool | null{
            $className = "\\App\Model\Service\\PoleTable";
            return (new $className())->edit($obj);
        }


        public static function delete(int $id){
            $className = "\\App\Model\Service\\PoleTable";
            return (new $className())->delete($id);
        }


        public function getName() : string {
            return $this->name;
        }

        public function setName($new): void{
            $this->name = $new;
        }

        public function getId() : int{
            return $this->id;
        }

        public function getSlug() : string{
            return $this->slug;
        }

        public function setSlug($new) : void{
            $this->slug = $new;
        }
    }