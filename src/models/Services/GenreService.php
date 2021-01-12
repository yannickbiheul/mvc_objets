<?php

namespace mvc_objets\models\Services;


use mvc_objets\models\Daos\GenreDao;
use mvc_objets\models\Entities\Genre;



class GenreService
{
    private $genreDao;  

    public function __construct()
    {
        $this->genreDao = new GenreDao();
    }

    public function getAllGenres()
    {
        $genres = $this->genreDao->findAll();
        return $genres;
    }

    public function getById($id) {
        $genre = $this->genreDao->findById($id);
        return $genre;
    }

}

?>