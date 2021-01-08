<?php

    namespace mvc_objets\models\Entities;

    class Actor {

        private $id;
        private $firstName;
        private $lastName;

        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id) {
            $this->id = $id;
            return $this;
        }

        public function getFirstName(): string {
            return $this->firstName;
        }

        public function setFirstName(string $name) {
            $this->firstName = $name;
            return $this;
        }

        public function getLastName(): string {
            return $this->lastName;
        }

        public function setLastName(string $name) {
            $this->lastName = $name;
            return $this;
        }
    }

?>