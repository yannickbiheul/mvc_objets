<?php

    namespace mvc_objets\models\Daos;

    use PDO;

    class BaseDao {
        protected $db;

        public function __construct() {
            $this->db = new PDO("mysql:host=localhost; dbname=cinesite", "root", "");
        }
    }

    
?>