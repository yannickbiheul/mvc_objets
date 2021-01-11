<?php

    namespace mvc_objets\controllers;

    use mvc_objets\models\Services\GenreService;

    class FrontController {

        private $genreService ;

        public function __construct(){
            // instanciation du service Genre
            $this->genreService = new GenreService();
        }

        public function index() {
            echo "Coucou from index";
        }

        public function genres() {
            $genres = $this->genreService->getAllGenres();
            // foreach($genres as $genre) {
            //     echo $genre->getName();
            // }
            include_once __DIR__.'/../views/viewGenre.php';
        }
        
    }

?>