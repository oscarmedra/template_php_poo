<?php
    namespace App\Model\Entity;
    use App\Model\Service\UserTable;
    use Core\Entity;
    class User extends Entity{
        protected int $id;
        public  string $userName;
        protected $password;

        public function __construct(){
            
        }

        public function property() : array{
            return [
                ':id' => $this->id,
                ':username' => "moussa",
            ];
        }

        public static function all() : array | null {
            $className = "\\App\Model\Service\\UserTable";
            return (new $className())->all();
        }

        public static function find() : array | null{
            return null;
        }
        
        public  function edit(?User $obj): bool | null{
            $className = "\\App\Model\Service\\UserTable";
            return (new $className())->edit($obj);
        }


        public static function delete(int $id){
            $className = "\\App\Model\Service\\UserTable";
            return (new $className())->delete($id);
        }
    }