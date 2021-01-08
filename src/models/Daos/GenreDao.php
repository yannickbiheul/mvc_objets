<?php

    namespace mvc_objets\models\Daos;

    use mvc_objets\models\Entities\Genre;

    class GenreDao extends BaseDao {
        public function findById($id): Genre {
            $stmt = $this->db->prepare("SELECT $ FROM genre WHERE id = :id");
            $res = $stmt->execute([':id' => $id]);

            if ($res) {
                return $stmt->fetchObject(Genre::class);
            } else {
                throw new \PDOException($stmt->errorInfo()[2]);
            }
        }
    }

?>