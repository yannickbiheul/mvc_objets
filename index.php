<?php

    require_once "vendor/autoload.php";

    use mvc_objets\controllers\FrontController;

    // $fc = new FrontController();
    // $fc->index();

    $router = new \Klein\Klein();
    $router->respond('GET', '/helloworld', function() {
        return "Hello World !!!";
    })

?>