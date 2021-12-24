<?php
    namespace App\Core;
    use \PDO;
    use App\Core\Database;
    use App\Core\Config;

    class Model{

        public static function tableName() : String{
            return strtolower(explode('\\', get_called_class())[count(explode('\\', get_called_class())) - 1]) . 's';
        }

        public static function className() : string{
            return explode('\\', get_called_class())[count(explode('\\', get_called_class())) - 1];
        }


        //HERE IS MY CRUD

        public static function find(int $id = null) : array | null{
            
            $sql = 'select * from ' . self::tableName();

            if($id !== null){
                $sql .= " where id = :id";

            }

            $query = Database::pdo()->prepare($sql);

            if($id !== null){
                $query->bindValue(':id', $id);

            }

            $query->execute();
            $query->setFetchMode(PDO::FETCH_CLASS, "\\".get_called_class());
            return $query->fetchAll() ?? null;
        }




        public static function save($obj){
            /*
            $sql = "insert into " . self::tableName() . "(";
            foreach ($obj as $attribut => $contenu):
                $sql .= $attribut . ",";
            endforeach;
            $sql = substr($sql, 0, -1);

            $sql .= ") VALUES (";
            foreach ($obj as $attribut => $contenu):
                $sql .= "'$contenu',";
            endforeach;
            $sql = substr($sql, 0, -1);
            $sql .= ")";

            $query = Database::pdo()->prepare($sql);

            return $query->execute();


            */

            $self_keys = array_keys(get_class_vars(static::class));
            $sql = "insert into " . self::tableName(). "(" .implode(', ', array_keys(get_class_vars(static::class))) . ")". " values (" .":" .implode(', :', array_keys(get_class_vars(static::class))).")";


            $query = Database::pdo()->prepare($sql);

            foreach ($self_keys as $key => $value) {
                echo ":". $value . "=>" . ($obj[$value] ?? null);
                $query->bindValue(":".$value, ($obj[$value] ?? null));
            }
            
            return $query->execute();
        }

        public static function update($obj){
            $self_keys = array_keys(get_class_vars(static::class));
            $sql = "Update " . self::tableName() . "set ";



            $sql = "update " . self::tableName() . " set ";
            foreach ($obj as $attribut => $contenu):
                if ($attribut != 'id') {
                    $sql .= "`" . $attribut . "`='$contenu', ";
                }
            endforeach;
            $sql = substr($sql, 0, -2);

            $sql .= " WHERE id=" . $obj['id'];
            // return $sql;

            $query = Database::pdo()->prepare($sql);
   
            return $query->execute();
        }

        public static function delete(int $id) {
            $query = Database::pdo()->prepare('delete from ' . self::tableName() . " where id = :id");
            $query->bindValue(':id', $id);

            if(self::find($id)){
                return $query->execute();
            }else{
                echo false;
            }
        }
    }