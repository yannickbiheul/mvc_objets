<?php

namespace mvc_objets\models\Services;


use mvc_objets\models\Daos\ActorDao;
use mvc_objets\models\Entities\Actor;



class ActorService
{
    private $actorDao;  

    public function __construct()
    {
        $this->actorDao = new ActorDao();
    }

    public function getAllActors()
    {
        $actors = $this->actorDao->findAll();
        return $actors;
    }

}

?>