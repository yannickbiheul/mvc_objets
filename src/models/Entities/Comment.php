<?php

    class Comment {

        private $id;
        private $author;
        private $mark;
        private $content;
        private $movie_id;

        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id) {
            $this->id = $id;
            return $this;
        }

        
    }

?>