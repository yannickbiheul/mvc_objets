<?php

    require_once "vendor/autoload.php";

    use mvc_objets\controllers\FrontController;

    $fc = new FrontController();
    $fc->index();

?>