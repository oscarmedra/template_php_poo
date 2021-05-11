<?php
    namespace Core;
    use \PDO;
    use App\Model\Entity\User;
    abstract class Model{
        /**
         * @var PDO
         */
        protected $className;
        protected $tableName;
        public function __construct(){
            $this->pdo = \Core\Database::getInstance()->getPdo();
        }

        public function all(){
            $query = $this->pdo->prepare("select * from $this->table");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_CLASS, $this->className);
            return $query->fetchAll() ?: null;
        }

        public function find(string ...$conditions){
            $conditions = implode(' and ', $conditions);
            $query = $this->pdo->prepare("select * from $this->table where $conditions");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_CLASS, $this->className);
            return $query->fetchAll() ?: null;
        }

        public function edit(\App\Model\Entity\User $obj){
            $sql = "update $this->table set ";

            foreach($obj->property() as $key=>$value):
                if($key == ':id') continue;
                $sql .= trim($key, ':')." = $key, ";
            endforeach;
            $sql = substr($sql, 0, -2);
            $sql .= " where id = :id";
            
            $query = $this->pdo->prepare($sql);
            return $query->execute($obj->property());
        }

        public function delete($id){
            $query = $this->pdo->prepare("delete from $this->table where id = :id");
            return $query->execute([$id]);
        }
    }