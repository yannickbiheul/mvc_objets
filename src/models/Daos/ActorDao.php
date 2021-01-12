<?php

    namespace mvc_objets\models\Daos;

    use mvc_objets\models\Entities\Actor;

    class ActorDao extends BaseDao {

        public function findAll(){
            $stmt = $this->db->prepare("SELECT * FROM actor ");
            $res = $stmt->execute();
            if ($res) {
                $actors = [];
                while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                    $actors[] = $this->createObjectFromFields($row);
                }
                return $actors;
            } else {
                throw new \PDOException($stmt->errorInfo()[2]);
            }
        }

        public function createObjectFromFields($fields): actor {
        //
        // liaison entre la donnée BDD et l'objet 
        // ici on voit le chainage ->setId->setName 
        //
            $actor = new actor();
            $actor->setId($fields['id'])
                ->setFirstName($fields['first_Name'])
                ->setLastName($fields['last_Name']);                      

            return $actor;
        }


    }

?>