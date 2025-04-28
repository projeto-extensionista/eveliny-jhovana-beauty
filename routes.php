<?php 
    
    $routes = [
        'home',
        'nome-da-pagina'
    ];

    $page = isset($_GET["page"]) && in_array($_GET["page"], $routes) ? $_GET["page"] : '404';
