<?php

    namespace mvc_objets\controllers;

    use mvc_objets\models\Services\GenreService;

    use Twig\Environment;

    class FrontController {

        private $genreService ;
        private $twig;

        public function __construct($twig){
            // instanciation du service Genre
            $this->genreService = new GenreService();
            $this->twig = $twig;
        }

        public function index() {
            echo "Coucou from index";
        }

        public function genres() {
            $genres = $this->genreService->getAllGenres();
            // foreach($genres as $genre) {
            //     echo $genre->getName();
            // }
            // include_once __DIR__.'/../views/viewGenre.php';
            echo $this->twig->render('genre.html.twig', [ "genres" => $genres]);
        }
        
    }

?>