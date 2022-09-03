<?php

    require_once('template.class.php');

    $uri = $_SERVER['REQUEST_URI'];
    $uriParts = explode('/',$uri);
    array_shift($uriParts);

    $template = new Template("views/index.html");


    $child = $template->getContent();

    $title = "Tienda en linea";
    include("views/app.html");
